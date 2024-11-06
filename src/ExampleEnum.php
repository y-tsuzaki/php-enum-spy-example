<?php

declare(strict_types=1);

namespace YTsuzaki\PhpEnumSpyExample;

enum ExampleEnum: string
{
    case IN_PROGRESS = 'in_progress';

    case PUNIRU = "puniru_is_cute_slime";

    public function toDisplay(): string
    {
        return match ($this) {
            self::IN_PROGRESS => '進行中',
            self::PUNIRU => 'ぷにるはかわいいスライム',
        };
    }
}