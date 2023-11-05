<?php

namespace Hilalahmad\PhpUuid;

class Uuid
{

    static public function generate()
    {
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return vsprintf('%s-%s-%s-%s-%s', str_split(bin2hex($data), 4));
    }

    static public function uuid()
    {
        $time = microtime(true) * 10000;
        $time = intval($time) + 122192928000000000; // Adjust to UUID time

        $timeHex = str_pad(dechex($time), 16, '0', STR_PAD_LEFT);
        $clockSeq = mt_rand(0, 0x3fff);
        $node = bin2hex(random_bytes(6));

        // Set the version (4 bits) and variant (2 bits)
        $timeHex = substr_replace($timeHex, '1', 12, 1);
        $timeHex = substr_replace($timeHex, '8', 16, 1);

        // Format the UUID
        $uuid = vsprintf('%s-%s-%s-%s-%s', str_split($timeHex, 4));

        // Add clock sequence and node
        $uuid .= vsprintf('%04x-%02x-%s', [$clockSeq, mt_rand(0, 0xff), $node]);

        return $uuid;
    }

    static public function uuid2()
    {
        // Generate a time-based value for the timestamp
        $timestamp = time();

        // Generate a random 12-character node-like value
        $nodeHex = substr(md5(uniqid('', true)), 0, 12);

        // Set the version (4 bits) and variant (2 bits)
        $timeHex = dechex($timestamp);
        $uuid = vsprintf('%s-2%s-%s-%s-%s', [
            substr($timeHex, 0, 8),
            substr($timeHex, 8, 4),
            substr($timeHex, 12, 3),
            substr($timeHex, 15, 4),
            $nodeHex
        ]);

        return $uuid;
    }

    static public function parseUuid($uuidString) {
        $uuidString = str_replace('-', '', $uuidString);
        $fields = [
            substr($uuidString, 0, 8),
            substr($uuidString, 8, 4),
            substr($uuidString, 12, 4),
            substr($uuidString, 16, 4),
            substr($uuidString, 20),
        ];
    
        return $fields;
    }


    static public function isValidUuid($uuidString) {
        return (bool) preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i', $uuidString);
    }

    static public function uuidToString($uuid) {
        return $uuid;
    }

    static public function compareUuids($uuid1, $uuid2) {
        return strcmp($uuid1, $uuid2);
    }
    
}
