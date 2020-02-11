<?php
/**
 * Russian Bee Cipher
 *
 * @package     bee-cipher
 * @link        https://github.com/LantosBro/bee-cipher
 * @author      Malik Nazimanov
 * @copyright   2020 Malik Nazimanov
 * @license     http://opensource.org/licenses/MIT  MIT
 */

/**
 * Class for translate text to bee cipher and bee cipher to text
 *
 * @package bee-cipher
 */
class Bee
{
    public function __construct()
    {
        return $coder = new Base2n(2);
    }

    public function to_bee($text)
    {
        $first_step = $this->encode($text);
        return $this->replacer("encode", $first_step);
    }

    public function bee_to($text)
    {
        $first_step = $this->decode($text);
        return $this->replacer("decode", $first_step);
    }

    private function replacer($type, $input)
    {
        if ($type === "encode") {
            return str_replace('0', 'Ъ', str_replace('1', 'Ж', str_replace('2', 'ъ', str_replace('3', 'ж', $input))));
        } elseif ($type === "decode") {
            return str_replace('Ъ', '0', str_replace('Ж', '1', str_replace('ъ', '2', str_replace('ж', '3', $input))));
        }
        return 0;
    }
}