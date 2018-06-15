<?php
/**
 * Abstract class all gegerators will extends from it
 *
 * @author flaver<zerbarian@outlook.com>
 * @copyright (c)2018 ARM, flaver
 * @package Arm.RepoBuilder.Generator
 */

namespace Arm\RepoBuilder\Generator;

 abstract class AbstractGenerator {

    /**
     * @access private
     */
    public function __construct()
    {

    }

    /**
     * __construct event for child classes
     *
     * @return void
     */
    public function init(){}

    /**
     * Generate a repo
     *
     * @return void
     */
    abstract public function build();



 }