<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on stmd.js
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Block\Element;

use League\CommonMark\ContextInterface;
use League\CommonMark\Cursor;
use League\CommonMark\Reference\Reference;

class ReferenceDefinition extends AbstractBlock
{
    /**
     * @var Reference
     */
    private $reference;

    public function __construct(Reference $reference)
    {
        parent::__construct();

        $this->reference = $reference;
    }

    /**
     * @return Reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Returns true if this block can contain the given block as a child node
     *
     * @param AbstractBlock $block
     *
     * @return bool
     */
    public function canContain(AbstractBlock $block)
    {
        return false;
    }

    /**
     * Returns true if block type can accept lines of text
     *
     * @return bool
     */
    public function acceptsLines()
    {
        return false;
    }

    /**
     * Whether this is a code block
     *
     * @return bool
     */
    public function isCode()
    {
        return false;
    }

    public function matchesNextLine(Cursor $cursor)
    {
        return false;
    }

    /**
     * @param ContextInterface $context
     * @param Cursor           $cursor
     */
    public function handleRemainingContents(ContextInterface $context, Cursor $cursor)
    {
        // Nothing to do here?
    }
}