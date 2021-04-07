<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class InputController extends ConvertController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function input( Request $request, $table )
    {

        $data = $request->all();

        $this->setString( $data['string'] );

        switch ( strtolower($table) ) {
            case 'entities':
                
                return response()->json([
                    'return' => implode( '', $this->Entities() )
                ]);

                break;

            case 'ascii':

                return response()->json([ 
                    'return' => implode( '', $this->ASCII() )
                ]);

                break;
            
            default:
                return 'Fatal Error: Table not found';
                break;
        }
        

    }

}
