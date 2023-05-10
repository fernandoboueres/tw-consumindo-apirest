<?php

namespace App\Http\Controllers;

use App\Repositories\CursoRepository;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public CursoRepository $cursoRepository;

    public function __construct(CursoRepository $cursoRepository)
    {
        $this->cursoRepository = $cursoRepository;
    }
    
    public function list()
    {
        $cursos = $this->cursoRepository->list();

        dd($cursos);
    }

    public function show()
    {
        $cursos = $this->cursoRepository->show('wBud42LFl7z2wCv6');

        dd($cursos);
    }
    
    public function create()
    {
        $response = $this->cursoRepository->create([
            'nome' => 'PHP OO parte 2',
            'linguagem' => 'PHP'
        ]);

        if ($response) {
            return 'criado com sucesso';
        }
        return 'erro ao criar';
    }

    public function update()
    {
        $response = $this->cursoRepository->update('Bbp1WjTrGyE3nRY7', [
            'nome' => 'PHP OO parte 3',
            'linguagem' => 'PHP'
        ]);

        if ($response) {
            return 'atualizado com sucesso';
        }
        return 'erro ao atualizar';
    }

    public function delete()
    {
        $response = $this->cursoRepository->delete('Bbp1WjTrGyE3nRY7');

        if ($response) {
            return 'deletado com sucesso';
        }
        return 'erro ao deletar';
    }
    
}
