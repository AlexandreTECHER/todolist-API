<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Laravel\Lumen\Routing\Router;

class MainController extends Controller
{

    /**
     * @param Request $request Http request object representation
     * 
     * @return Illuminate View view
     */
    public function toto(Request $request){

        $number = $request->input('number');

        if(!is_numeric($number)){
            Log::notice('Invalid parameter : ' .$number);
            return response('', Response::HTTP_BAD_REQUEST);
        }
        $number = intval($number);

        if($number === 42){

            return response()->json(

                [
                    'value' => 42,
                    'name' => 'La grande question sur la vie, l\'univers et le reste',
                    'source' => 'Le guide du voyageur intergalactique',
                    'meaning' => 'C\'est la réponse ultime à toutes les questions de l\'univers.'
                ]

            );

        }else if($number === 301){
        
            return redirect()->route('toto', [], 301);
            // return redirect()->route('toto', [], Response::HTTP_MOVED_PERMANENTLY);

        }else{

            return view('toto', [
                'date' => date('m-d-Y H:i:s'),
                'number' => $number
            ]);

        }

        
    }
}