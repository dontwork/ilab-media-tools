<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/expr.proto

namespace MediaCloud\Vendor\GPBMetadata\Google\Api\Expr\V1Beta1;

class Expr
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \MediaCloud\Vendor\Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        } \MediaCloud\Vendor\GPBMetadata\Google\Api\Expr\V1Beta1\Source::initOnce(); \MediaCloud\Vendor\GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae60e0a22676f6f676c652f6170692f657870722f763162657461312f65" .
            "7870722e70726f746f1217676f6f676c652e6170692e657870722e763162" .
            "657461311a1c676f6f676c652f70726f746f6275662f7374727563742e70" .
            "726f746f228b010a0a50617273656445787072122b0a0465787072180220" .
            "01280b321d2e676f6f676c652e6170692e657870722e763162657461312e" .
            "4578707212380a0b736f757263655f696e666f18032001280b32232e676f" .
            "6f676c652e6170692e657870722e763162657461312e536f75726365496e" .
            "666f12160a0e73796e7461785f76657273696f6e18042001280922ab0a0a" .
            "0445787072120a0a02696418022001280512380a0c6c69746572616c5f65" .
            "78707218032001280b32202e676f6f676c652e6170692e657870722e7631" .
            "62657461312e4c69746572616c480012390a0a6964656e745f6578707218" .
            "042001280b32232e676f6f676c652e6170692e657870722e763162657461" .
            "312e457870722e4964656e744800123b0a0b73656c6563745f6578707218" .
            "052001280b32242e676f6f676c652e6170692e657870722e763162657461" .
            "312e457870722e53656c656374480012370a0963616c6c5f657870721806" .
            "2001280b32222e676f6f676c652e6170692e657870722e76316265746131" .
            "2e457870722e43616c6c4800123d0a096c6973745f657870721807200128" .
            "0b32282e676f6f676c652e6170692e657870722e763162657461312e4578" .
            "70722e4372656174654c697374480012410a0b7374727563745f65787072" .
            "18082001280b322a2e676f6f676c652e6170692e657870722e7631626574" .
            "61312e457870722e437265617465537472756374480012490a12636f6d70" .
            "726568656e73696f6e5f6578707218092001280b322b2e676f6f676c652e" .
            "6170692e657870722e763162657461312e457870722e436f6d7072656865" .
            "6e73696f6e48001a150a054964656e74120c0a046e616d65180120012809" .
            "1a5a0a0653656c656374122e0a076f706572616e6418012001280b321d2e" .
            "676f6f676c652e6170692e657870722e763162657461312e45787072120d" .
            "0a056669656c6418022001280912110a09746573745f6f6e6c7918032001" .
            "28081a740a0443616c6c122d0a0674617267657418012001280b321d2e67" .
            "6f6f676c652e6170692e657870722e763162657461312e4578707212100a" .
            "0866756e6374696f6e180220012809122b0a046172677318032003280b32" .
            "1d2e676f6f676c652e6170692e657870722e763162657461312e45787072" .
            "1a3d0a0a4372656174654c697374122f0a08656c656d656e747318012003" .
            "280b321d2e676f6f676c652e6170692e657870722e763162657461312e45" .
            "7870721af6010a0c437265617465537472756374120c0a04747970651801" .
            "2001280912410a07656e747269657318022003280b32302e676f6f676c65" .
            "2e6170692e657870722e763162657461312e457870722e43726561746553" .
            "74727563742e456e7472791a94010a05456e747279120a0a026964180120" .
            "01280512130a096669656c645f6b6579180220012809480012300a076d61" .
            "705f6b657918032001280b321d2e676f6f676c652e6170692e657870722e" .
            "763162657461312e457870724800122c0a0576616c756518042001280b32" .
            "1d2e676f6f676c652e6170692e657870722e763162657461312e45787072" .
            "420a0a086b65795f6b696e641ab0020a0d436f6d70726568656e73696f6e" .
            "12100a08697465725f76617218012001280912310a0a697465725f72616e" .
            "676518022001280b321d2e676f6f676c652e6170692e657870722e763162" .
            "657461312e4578707212100a08616363755f76617218032001280912300a" .
            "09616363755f696e697418042001280b321d2e676f6f676c652e6170692e" .
            "657870722e763162657461312e4578707212350a0e6c6f6f705f636f6e64" .
            "6974696f6e18052001280b321d2e676f6f676c652e6170692e657870722e" .
            "763162657461312e4578707212300a096c6f6f705f737465701806200128" .
            "0b321d2e676f6f676c652e6170692e657870722e763162657461312e4578" .
            "7072122d0a06726573756c7418072001280b321d2e676f6f676c652e6170" .
            "692e657870722e763162657461312e45787072420b0a09657870725f6b69" .
            "6e6422d8010a074c69746572616c12300a0a6e756c6c5f76616c75651801" .
            "2001280e321a2e676f6f676c652e70726f746f6275662e4e756c6c56616c" .
            "7565480012140a0a626f6f6c5f76616c7565180220012808480012150a0b" .
            "696e7436345f76616c7565180320012803480012160a0c75696e7436345f" .
            "76616c7565180420012804480012160a0c646f75626c655f76616c756518" .
            "0520012801480012160a0c737472696e675f76616c756518062001280948" .
            "0012150a0b62797465735f76616c756518072001280c4800420f0a0d636f" .
            "6e7374616e745f6b696e64426a0a1b636f6d2e676f6f676c652e6170692e" .
            "657870722e7631626574613142094578707250726f746f50015a3b676f6f" .
            "676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65" .
            "617069732f6170692f657870722f763162657461313b65787072f8010162" .
            "0670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

