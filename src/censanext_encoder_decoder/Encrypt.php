<?php
/**
 * Created by AnandaKarthick.
 * Date: 04/04/2023
 * Time: 18:50
 */

namespace censanext_encoder_decoder;


class Encrypt
{
    /**
     * @param string $text The text we want to count the number of words it consist of
     * @return int The number of words in text
     */
    public static function encode(string $text)
    {
        if ($text) {
            $str = base64_encode($text) . md5('karthicksaranya') . md5('saranyakarthick');
            $decode = base64_encode($str);
            return $decode;
        } else {
            return FALSE;
        }

    }
}