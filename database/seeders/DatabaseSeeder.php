<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entities;
use App\Models\ASCII;

class DatabaseSeeder extends Seeder
{

    protected $entities = [
        // Aa
        [ 'string' => 'Á', 'converting' => '&Aacute;' ],
        [ 'string' => 'á', 'converting' => '&aacute;' ],
        [ 'string' => 'Â', 'converting' => '&Acirc;' ],
        [ 'string' => 'â', 'converting' => '&acirc;' ],
        [ 'string' => 'À', 'converting' => '&Agrave;' ],
        [ 'string' => 'à', 'converting' => '&agrave;' ],
        [ 'string' => 'Å', 'converting' => '&Aring;' ],
        [ 'string' => 'å', 'converting' => '&aring;' ],
        [ 'string' => 'Ã', 'converting' => '&Atilde;' ],
        [ 'string' => 'ã', 'converting' => '&atilde;' ],
        [ 'string' => 'Ä', 'converting' => '&Auml;' ],
        [ 'string' => 'ä', 'converting' => '&auml;' ],
        [ 'string' => 'Æ', 'converting' => '&AElig;	' ],
        [ 'string' => 'æ', 'converting' => '&aelig;' ],
        // Ee
        [ 'string' => 'É', 'converting' => '&Eacute;' ],
        [ 'string' => 'é', 'converting' => '&eacute;' ],
        [ 'string' => 'Ê', 'converting' => '&Ecirc;' ],
        [ 'string' => 'ê', 'converting' => '&ecirc;' ],
        [ 'string' => 'È', 'converting' => '&Egrave;' ],
        [ 'string' => 'è', 'converting' => '&egrave;' ],
        [ 'string' => 'Ë', 'converting' => '&Euml;' ],
        [ 'string' => 'ë', 'converting' => '&euml;' ],
        [ 'string' => 'Ð', 'converting' => '&ETH;' ],
        [ 'string' => 'ð', 'converting' => '&eth;' ],
        // Ii
        [ 'string' => 'Í', 'converting' => '&Iacute;' ],
        [ 'string' => 'í', 'converting' => '&iacute;' ],
        [ 'string' => 'Î', 'converting' => '&Icirc;' ],
        [ 'string' => 'î', 'converting' => '&icirc;' ],
        [ 'string' => 'Ì', 'converting' => '&Igrave;' ],
        [ 'string' => 'ì', 'converting' => '&igrave;' ],
        [ 'string' => 'Ï', 'converting' => '&Iuml;' ],
        [ 'string' => 'ï', 'converting' => '&iuml;' ],
        // Oo
        [ 'string' => 'Ó', 'converting' => '&Oacute;' ],
        [ 'string' => 'ó', 'converting' => '&oacute;' ],
        [ 'string' => 'Ô', 'converting' => '&Oacirc;' ],
        [ 'string' => 'ô', 'converting' => '&oacirc;' ],
        [ 'string' => 'Ò', 'converting' => '&Ograve;' ],
        [ 'string' => 'ò', 'converting' => '&ograve;' ],
        [ 'string' => 'Ø', 'converting' => '&Oslash;' ],
        [ 'string' => 'ø', 'converting' => '&oslash;' ],
        [ 'string' => 'Õ', 'converting' => '&Otilde;' ],
        [ 'string' => 'õ', 'converting' => '&otilde;' ],
        [ 'string' => 'Ö', 'converting' => '&Ouml;' ],
        [ 'string' => 'ö', 'converting' => '&ouml;' ],
        // Uu
        [ 'string' => 'Ú', 'converting' => '&Uacute;' ],
        [ 'string' => 'ú', 'converting' => '&uacute;' ],
        [ 'string' => 'Û', 'converting' => '&Uacirc;' ],
        [ 'string' => 'û', 'converting' => '&uacirc;' ],
        [ 'string' => 'Ù', 'converting' => '&Uagrave;' ],
        [ 'string' => 'ù', 'converting' => '&uagrave;' ],
        [ 'string' => 'Ü', 'converting' => '&Uauml;' ],
        [ 'string' => 'ü', 'converting' => '&uauml;' ],
        // Çç
        [ 'string' => 'Ç', 'converting' => '&Ccedil;' ],
        [ 'string' => 'ç', 'converting' => '&ccedil;' ],
        // Nn
        [ 'string' => 'Ñ', 'converting' => '&Ntilde;' ],
        [ 'string' => 'ñ', 'converting' => '&ntilde;' ],
        // Yy
        [ 'string' => 'Ý', 'converting' => '&Yacute;' ],
        [ 'string' => 'ý', 'converting' => '&yacute;' ],
        // Simbols
        [ 'string' => '"', 'converting' => '&quot;' ],
        [ 'string' => '<', 'converting' => '&lt;' ],
        [ 'string' => '>', 'converting' => '&gt;' ],
        [ 'string' => '&', 'converting' => '&amp;' ],
        [ 'string' => '®', 'converting' => '&reg;' ],
        [ 'string' => '©', 'converting' => '&copy;' ],
        [ 'string' => 'Þ', 'converting' => '&THORN;' ],
        [ 'string' => 'þ', 'converting' => '&thorn;' ],
        [ 'string' => 'ß', 'converting' => '&szlig;' ],
    ];

    protected $ascii = [
        [ 'converting' => '&#33;', 'string' => '!' ],
        [ 'converting' => '&#65;', 'string' => 'A' ],
        [ 'converting' => '&#97;', 'string' => 'a' ],
        [ 'converting' => '&#163;', 'string' => '£' ],
        [ 'converting' => '&#195;', 'string' => 'Ã' ],
        [ 'converting' => '&#227;', 'string' => 'ã' ],
        [ 'converting' => '&#34;', 'string' => '"' ],
        [ 'converting' => '&#66;', 'string'  => 'B' ],
        [ 'converting' => '&#98;', 'string' => 'b' ],
        [ 'converting' => '&#164;', 'string' => '¤' ],
        [ 'converting' => '&#196;', 'string' => 'Ä' ],
        [ 'converting' => '&#228;', 'string' => 'ä' ],
        [ 'converting' => '&#35;', 'string' => '#' ],
        [ 'converting' => '&#67;', 'string' => 'C' ],
        [ 'converting' => '&#99;', 'string' => 'c' ],
        [ 'converting' => '&#165;', 'string' => '¥' ],
        [ 'converting' => '&#197;', 'string' => 'Å' ],
        [ 'converting' => '&#229;', 'string' => 'å' ],
        [ 'converting' => '&#36;', 'string' => '$' ],
        [ 'converting' => '&#68;', 'string' => 'D' ],
        [ 'converting' => '&#100;', 'string' => 'd' ],
        [ 'converting' => '&#166;', 'string' => '¦' ],
        [ 'converting' => '&#198;', 'string' => 'Æ' ],
        [ 'converting' => '&#230;', 'string' => 'æ' ],
        [ 'converting' => '&#37;', 'string' => '%' ],
        [ 'converting' => '&#69;', 'string' => 'E' ],
        [ 'converting' => '&#101;', 'string' => 'e' ],
        [ 'converting' => '&#167;', 'string' => '§' ],
        [ 'converting' => '&#199;', 'string' => 'Ç' ],
        [ 'converting' => '&#231;', 'string' => 'ç' ],
        [ 'converting' => '&#38;', 'string' => '&' ],
        [ 'converting' => '&#70;', 'string' => 'F' ],
        [ 'converting' => '&#102;', 'string' => 'f' ],
        [ 'converting' => '&#168;', 'string' => '¨' ],
        [ 'converting' => '&#200;', 'string' => 'È' ],
        [ 'converting' => '&#232;', 'string' => 'è' ],
        [ 'converting' => '&#39;', 'string' => '\'' ],
        [ 'converting' => '&#71;', 'string' => 'G' ],
        [ 'converting' => '&#103;', 'string' => 'g' ],
        [ 'converting' => '&#169;', 'string' => '©' ],
        [ 'converting' => '&#201;', 'string' => 'É' ],
        [ 'converting' => '&#233;', 'string' => 'é' ],
        [ 'converting' => '&#40;', 'string' => '(' ],
        [ 'converting' => '&#72;', 'string' => 'H' ],
        [ 'converting' => '&#104;', 'string' => 'h' ],
        [ 'converting' => '&#170;', 'string' => 'ª' ],
        [ 'converting' => '&#202;', 'string' => 'Ê' ],
        [ 'converting' => '&#234;', 'string' => 'ê' ],
        [ 'converting' => '&#41;', 'string' => ')' ],
        [ 'converting' => '&#73;', 'string' => 'I' ],
        [ 'converting' => '&#105;', 'string' => 'i' ],
        [ 'converting' => '&#171;', 'string' => '«' ],
        [ 'converting' => '&#203;', 'string' => 'Ë' ],
        [ 'converting' => '&#235;', 'string' => 'ë' ],
        [ 'converting' => '&#42;', 'string' => '*' ],
        [ 'converting' => '&#74;', 'string' => 'J' ],
        [ 'converting' => '&#106;', 'string' => 'j' ],
        [ 'converting' => '&#172;', 'string' => '¬' ],
        [ 'converting' => '&#204;', 'string' => 'Ì' ],
        [ 'converting' => '&#236;', 'string' => 'ì' ],
        [ 'converting' => '&#43;', 'string' => '+' ],
        [ 'converting' => '&#75;', 'string' => 'K' ],
        [ 'converting' => '&#107;', 'string' => 'k' ],
        [ 'converting' => '&#173;', 'string' => '­' ],
        [ 'converting' => '&#205;', 'string' => 'Í' ],
        [ 'converting' => '&#237;', 'string' => 'í' ],
        [ 'converting' => '&#44;', 'string' => ',' ],
        [ 'converting' => '&#76;', 'string' => 'L' ],
        [ 'converting' => '&#108;', 'string' => 'l' ],
        [ 'converting' => '&#174;', 'string' => '®' ],
        [ 'converting' => '&#206;', 'string' => 'Î' ],
        [ 'converting' => '&#238;', 'string' => 'î' ],
        [ 'converting' => '&#45;', 'string' => '-' ],
        [ 'converting' => '&#77;', 'string' => 'M' ],
        [ 'converting' => '&#109;', 'string' => 'm' ],
        [ 'converting' => '&#175;', 'string' => '¯' ],
        [ 'converting' => '&#207;', 'string' => 'Ï' ],
        [ 'converting' => '&#239;', 'string' => 'ï' ],
        [ 'converting' => '&#46;', 'string' => '.' ],
        [ 'converting' => '&#78;', 'string' => 'N' ],
        [ 'converting' => '&#110;', 'string' => 'n' ],
        [ 'converting' => '&#176;', 'string' => '°' ],
        [ 'converting' => '&#208;', 'string' => 'Ð' ],
        [ 'converting' => '&#240;', 'string' => 'ð' ],
        [ 'converting' => '&#47;', 'string' => '/' ],
        [ 'converting' => '&#79;', 'string' => 'O' ],
        [ 'converting' => '&#111;', 'string' => 'o' ],
        [ 'converting' => '&#177;', 'string' => '±' ],
        [ 'converting' => '&#209;', 'string' => 'Ñ' ],
        [ 'converting' => '&#241;', 'string' => 'ñ' ],
        [ 'converting' => '&#48;', 'string' => '0' ],
        [ 'converting' => '&#80;', 'string' => 'P' ],
        [ 'converting' => '&#112;', 'string' => 'p' ],
        [ 'converting' => '&#178;', 'string' => '²' ],
        [ 'converting' => '&#210;', 'string' => 'Ò' ],
        [ 'converting' => '&#242;', 'string' => 'ò' ],
        [ 'converting' => '&#49;', 'string' => '1' ],
        [ 'converting' => '&#81;', 'string' => 'Q' ],
        [ 'converting' => '&#113;', 'string' => 'q' ],
        [ 'converting' => '&#179;', 'string' => '³' ],
        [ 'converting' => '&#211;', 'string' => 'Ó' ],
        [ 'converting' => '&#243;', 'string' => 'ó' ],
        [ 'converting' => '&#50;', 'string' => '2' ],
        [ 'converting' => '&#82;', 'string' => 'R' ],
        [ 'converting' => '&#114;', 'string' => 'r' ],
        [ 'converting' => '&#180;', 'string' => '´' ],
        [ 'converting' => '&#212;', 'string' => 'Ô' ],
        [ 'converting' => '&#244;', 'string' => 'ô' ],
        [ 'converting' => '&#51;', 'string' => '3' ],
        [ 'converting' => '&#83;', 'string' => 'S' ],
        [ 'converting' => '&#115;', 'string' => 's' ],
        [ 'converting' => '&#181;', 'string' => 'µ' ],
        [ 'converting' => '&#213;', 'string' => 'Õ' ],
        [ 'converting' => '&#245;', 'string' => 'õ' ],
        [ 'converting' => '&#52;', 'string' => '4' ],
        [ 'converting' => '&#84;', 'string' => 'T' ],
        [ 'converting' => '&#116;', 'string' => 't' ],
        [ 'converting' => '&#182;', 'string' => '¶' ],
        [ 'converting' => '&#214;', 'string' => 'Ö' ],
        [ 'converting' => '&#246;', 'string' => 'ö' ],
        [ 'converting' => '&#53;', 'string' => '5' ],
        [ 'converting' => '&#85;', 'string' => 'U' ],
        [ 'converting' => '&#117;', 'string' => 'u' ],
        [ 'converting' => '&#183;', 'string' => '·' ],
        [ 'converting' => '&#215;', 'string' => '×' ],
        [ 'converting' => '&#247;', 'string' => '÷' ],
        [ 'converting' => '&#54;', 'string' => '6' ],
        [ 'converting' => '&#86;', 'string' => 'V' ],
        [ 'converting' => '&#118;', 'string' => 'v' ],
        [ 'converting' => '&#184;', 'string' => '¸' ],
        [ 'converting' => '&#216;', 'string' => 'Ø' ],
        [ 'converting' => '&#248;', 'string' => 'ø' ],
        [ 'converting' => '&#55;', 'string' => '7' ],
        [ 'converting' => '&#87;', 'string' => 'W' ],
        [ 'converting' => '&#119;', 'string' => 'w' ],
        [ 'converting' => '&#185;', 'string' => '¹' ],
        [ 'converting' => '&#217;', 'string' => 'Ù' ],
        [ 'converting' => '&#249;', 'string' => 'ù' ],
        [ 'converting' => '&#56;', 'string' => '8' ],
        [ 'converting' => '&#88;', 'string' => 'X' ],
        [ 'converting' => '&#120;', 'string' => 'x' ],
        [ 'converting' => '&#186;', 'string' => 'º' ],
        [ 'converting' => '&#218;', 'string' => 'Ú' ],
        [ 'converting' => '&#250;', 'string' => 'ú' ],
        [ 'converting' => '&#57;', 'string' => '9' ],
        [ 'converting' => '&#89;', 'string' => 'Y' ],
        [ 'converting' => '&#121;', 'string' => 'y' ],
        [ 'converting' => '&#187;', 'string' => '»' ],
        [ 'converting' => '&#219;', 'string' => 'Û' ],
        [ 'converting' => '&#251;', 'string' => 'û' ],
        [ 'converting' => '&#58;', 'string' => ':' ],
        [ 'converting' => '&#90;', 'string' => 'Z' ],
        [ 'converting' => '&#122;', 'string' => 'z' ],
        [ 'converting' => '&#188;', 'string' => '¼' ],
        [ 'converting' => '&#220;', 'string' => 'Ü' ],
        [ 'converting' => '&#252;', 'string' => 'ü' ],
        [ 'converting' => '&#59;', 'string' => ';' ],
        [ 'converting' => '&#91;', 'string' => '[ ' ],
        [ 'converting' => '&#123;', 'string' => '{' ],
        [ 'converting' => '&#189;', 'string' => '½' ],
        [ 'converting' => '&#221;', 'string' => 'Ý' ],
        [ 'converting' => '&#253;', 'string' => 'ý' ],
        [ 'converting' => '&#60;', 'string' => '<' ],
        [ 'converting' => '&#92;', 'string' => '\\' ],
        [ 'converting' => '&#124;', 'string' => '|' ],
        [ 'converting' => '&#190;', 'string' => '¾' ],
        [ 'converting' => '&#222;', 'string' => 'Þ' ],
        [ 'converting' => '&#254;', 'string' => 'þ' ],
        [ 'converting' => '&#61;', 'string' => '=' ],
        [ 'converting' => '&#93;', 'string' => ']' ],
        [ 'converting' => '&#125;', 'string' => '}' ],
        [ 'converting' => '&#191;', 'string' => '¿' ],
        [ 'converting' => '&#223;', 'string' => 'ß' ],
        [ 'converting' => '&#255;', 'string' => 'ÿ' ],
        [ 'converting' => '&#62;', 'string' => '>' ],
        [ 'converting' => '&#94;', 'string' => '^' ],
        [ 'converting' => '&#126;', 'string' => '~' ],
        [ 'converting' => '&#192;', 'string' => 'À' ],
        [ 'converting' => '&#224;', 'string' => 'à' ],
        [ 'converting' => '&#256;', 'string' => 'Ā' ],
        [ 'converting' => '&#63;', 'string' => '?' ],
        [ 'converting' => '&#95;', 'string' => '_' ],
        [ 'converting' => '&#161;', 'string' => '¡' ],
        [ 'converting' => '&#193;', 'string' => 'Á' ],
        [ 'converting' => '&#225;', 'string' => 'á' ],
        [ 'converting' => '&#64;', 'string' => '@' ],
        [ 'converting' => '&#96;', 'string' => '`' ],
        [ 'converting' => '&#162;', 'string' => '¢' ],
        [ 'converting' => '&#194;', 'string' => 'Â' ],
        [ 'converting' => '&#226;', 'string' => 'â' ],
    ];

    /**',
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->entities as $array) {
            Entities::create( $array );
        }

        foreach ($this->ascii as $array) {
            ASCII::create( $array );
        }
        // $this->call('UsersTableSeeder');
    }
}
