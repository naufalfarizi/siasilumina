<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\MataPelajaran;
use App\NilaiPelajaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|string|min:2',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if (!$token = auth('api')->attempt(array($fieldType => $request->username, 'password' => $request->password))) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
    }
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
    public function profile()
    {
        if (!$user = auth('api')->user()) {
            return response()->json('Unauthorized', 401);
        }
        return response()->json(['user' => $user, 'recommendation_cat' => $this->getRecommendation($user->id)]);
    }

    public function getRecommendation($id)
    {
        $data = DB::table('nilai_pelajarans')
            ->where('nilai_pelajarans.users_id', $id)
            ->join('mata_pelajarans', 'nilai_pelajarans.mata_pelajarans_id', '=', 'mata_pelajarans.id')
            ->groupBy('mata_pelajarans.poin')
            ->selectRaw('mata_pelajarans.poin as kategori, sum(nilai_pelajarans.nilai) as sum, count(mata_pelajarans.poin) as jumlah')
            ->get();
        $temp = 0;
        $recommendation = '3';
        foreach ($data as $nilai) {
            if ($temp < $nilai->sum / $nilai->jumlah) {
                $temp = $nilai->sum / $nilai->jumlah;
                $recommendation = $nilai->kategori;
            }
        }
        return $recommendation;
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->createNewToken(auth('api')->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer'
        ]);
    }
}
