<?php   

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GithubService {
    public function buscarRepositorio()
    {
        $response = Http::get('https://api.github.com/search/repositories?q=EltonFonseca');

        $repositorios = [];
        
        if($response->successful()){
            $repositorios = $response->json()['items'];
        }

        return $repositorios;
    }
}