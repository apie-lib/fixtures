<?php
namespace Apie\Fixtures\Dto;

use Apie\Core\Attributes\Optional;
use Apie\Core\Dto\DtoInterface;
use Apie\Fixtures\Enums\Gender;

class OptionalExampleDto implements DtoInterface
{
    #[Optional()]
    public ?string $optionalString;

    #[Optional()]
    public ?int $optionalInteger;

    #[Optional()]
    public ?float $optionalFloatingPoint;

    #[Optional()]
    public ?bool $optionalTrueOrFalse;
    
    #[Optional()]
    public mixed $mixed;

    #[Optional()]
    public $noType;

    #[Optional()]
    public ?Gender $optionalGender;
}
