<?php namespace Ske\Parsing\Path;

/**
 * SIKessEm Path parser interface
 * 
 * @package sikessem/parsing-path
 * @author SIGUI Kessé Emmanuel
 * @license MIT License
 */
interface PathParser
{
    /**
     * Parse the parser path
     * 
     * @return namespace\PathParsed
     */
    public function parse(): PathParsed;
}