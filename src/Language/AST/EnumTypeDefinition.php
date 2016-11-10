<?php
namespace GraphQL\Language\AST;

class EnumTypeDefinition extends Node implements TypeDefinition
{
    /**
     * @var string
     */
    public $kind = NodeType::ENUM_TYPE_DEFINITION;

    /**
     * @var Name
     */
    public $name;

    /**
     * @var Directive[]
     */
    public $directives;

    /**
     * @var EnumValueDefinition[]
     */
    public $values;
}