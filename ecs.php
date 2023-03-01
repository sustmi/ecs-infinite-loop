<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionCallSignatureSniff;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(FunctionCallArgumentSpacingSniff::class);
    $ecsConfig->rule(FunctionCallSignatureSniff::class);
};
