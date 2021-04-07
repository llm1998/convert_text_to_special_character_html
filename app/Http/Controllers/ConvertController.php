<?php

namespace App\Http\Controllers;

use App\Models\Entities;
use App\Models\ASCII;

class ConvertController extends Controller
{

    protected $string;
    protected $newString;

    public function getString()
    {
        return $this->string;
    }

    public function getNewString()
    {
        return $this->newString;
    }

    public function setString( $String )
    {
        $this->string = $String;
    }

    public function setNewString( $String )
    {
        $this->newString[] = $String;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function Entities()
    {   

        $arrCharacters = $this->str_split_unicode( $this->getString(), 1 );
        
        foreach ( $arrCharacters as $index => $character )
        {
            $count = Entities::where('string', $character)->count();

            if ( $count != 0 )
            {
                foreach( Entities::where('string', $character)->get() as $entities )
                {

                    if ( $entities->string === $character )
                    {
                        $arrCharacters[$index] = $entities->converting;
                    }

                }
            }
        }

        return $arrCharacters;
    
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function ASCII()
    {
        $arrCharacters = $this->str_split_unicode( $this->getString(), 1 );
        
        foreach ( $arrCharacters as $index => $character )
        {
            $count = ASCII::where('string', $character)->count();

            if ( $count != 0 )
            {
                foreach( ASCII::where('string', $character)->get() as $ascii )
                {

                    if ( $ascii->string === $character )
                    {
                        $arrCharacters[$index] = $ascii->converting;
                    }

                }
            }
        }

        return $arrCharacters;
    }

    protected function str_split_unicode($str, $length = 1) {
        $tmp = preg_split('~~u', $str, -1, PREG_SPLIT_NO_EMPTY);
        // if ($length > 1) {
        //     $chunks = array_chunk($tmp, $length);
        //     foreach ($chunks as $i => $chunk) {
        //         $chunks[$i] = join('', (array) $chunk);
        //     }
        //     echo $chunks . "\n";
        //     $tmp = $chunks;
        // }
        // print_r($tmp);
        return $tmp;
    }

}
