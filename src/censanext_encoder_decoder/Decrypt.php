<?php
/**
 * Created by AnandaKarthick.
 * Date: 04/04/2023
 * Time: 18:50
 */

namespace censanext_encoder_decoder;


class Decrypt
{
    /**
     * @param string $text The text we want to count the number of words it consist of
     * @return int The number of words in text
     */
    public static function decode(string $text)
    {
        if ($text) {

            $afterDecode = base64_decode($text);
            $sremove = substr($afterDecode, 0, -64);
            $ge64 = substr($afterDecode, -64);
            $geLast32 = substr($ge64, -32);
            $geFirst32 = substr($ge64, 0, 32);
            if ((md5('karthicksaranya') == $geFirst32) && (md5('saranyakarthick') == $geLast32)) {
                return base64_decode($sremove);
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}