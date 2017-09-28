<?php

namespace Neos\ContentRepository\Domain\Context\Node\Event;

use Neos\ContentRepository\Domain\ValueObject\ContentStreamIdentifier;
use Neos\ContentRepository\Domain\ValueObject\DimensionSpacePoint;
use Neos\ContentRepository\Domain\ValueObject\DimensionSpacePointSet;
use Neos\ContentRepository\Domain\ValueObject\NodeIdentifier;
use Neos\EventSourcing\Event\EventInterface;
use Neos\ContentRepository\Domain\ValueObject\NodeAggregateIdentifier;
use Neos\ContentRepository\Domain\ValueObject\NodeName;
use Neos\ContentRepository\Domain\ValueObject\NodeTypeName;
use Neos\ContentRepository\Domain\ValueObject\NodeIdentifierAndDimensionSpacePointSet;

/**
 * Node was added to node aggregate event
 */
final class NodeWasAddedToAggregate implements EventInterface
{

    /**
     * @var ContentStreamIdentifier
     */
    private $contentStreamIdentifier;

    /**
     * @var NodeAggregateIdentifier
     */
    private $nodeAggregateIdentifier;

    /**
     * @var NodeTypeName
     */
    private $nodeTypeName;

    /**
     * Location of the node in the dimension space
     *
     * @var DimensionSpacePoint
     */
    private $dimensionSpacePoint;

    /**
     * Visibility of node in the dimension space
     *
     * @var DimensionSpacePointSet
     */
    private $visibleDimensionSpacePoints;

    /**
     * @var NodeIdentifier
     */
    private $nodeIdentifier;

    /**
     * @var NodeIdentifier
     */
    private $parentNodeIdentifier;

    /**
     * @var NodeName
     */
    private $nodeName;

    /**
     * (property name => PropertyValue)
     *
     * @var array
     */
    private $propertyDefaultValuesAndTypes;

    /**
     * @var array<NodeIdentifierAndDimensionSpacePointSet>
     */
    private $nodeVisibilityChanges;

    /**
     * NodeWasAddedToAggregate constructor.
     *
     * @param ContentStreamIdentifier $contentStreamIdentifier
     * @param NodeAggregateIdentifier $nodeAggregateIdentifier
     * @param NodeTypeName $nodeTypeName
     * @param DimensionSpacePoint $dimensionSpacePoint
     * @param DimensionSpacePointSet $visibleDimensionSpacePoints
     * @param NodeIdentifier $nodeIdentifier
     * @param NodeIdentifier $parentNodeIdentifier
     * @param NodeName $nodeName
     * @param array $propertyDefaultValuesAndTypes
     * @param array<NodeIdentifierAndDimensionSpacePointSet> $nodeVisibilityChanges
     */
    public function __construct(
        ContentStreamIdentifier $contentStreamIdentifier,
        NodeAggregateIdentifier $nodeAggregateIdentifier,
        NodeTypeName $nodeTypeName,
        DimensionSpacePoint $dimensionSpacePoint,
        DimensionSpacePointSet $visibleDimensionSpacePoints,
        NodeIdentifier $nodeIdentifier,
        NodeIdentifier $parentNodeIdentifier,
        NodeName $nodeName,
        array $propertyDefaultValuesAndTypes,
        array $nodeVisibilityChanges
    ) {
        $this->contentStreamIdentifier = $contentStreamIdentifier;
        $this->nodeAggregateIdentifier = $nodeAggregateIdentifier;
        $this->nodeTypeName= $nodeTypeName;
        $this->dimensionSpacePoint = $dimensionSpacePoint;
        $this->visibleDimensionSpacePoints = $visibleDimensionSpacePoints;
        $this->nodeIdentifier = $nodeIdentifier;
        $this->parentNodeIdentifier = $parentNodeIdentifier;
        $this->nodeName = $nodeName;
        $this->propertyDefaultValuesAndTypes = $propertyDefaultValuesAndTypes;
        $this->nodeVisibilityChanges = $nodeVisibilityChanges;
    }

    /**
     * @return ContentStreamIdentifier
     */
    public function getContentStreamIdentifier(): ContentStreamIdentifier
    {
        return $this->contentStreamIdentifier;
    }

    /**
     * @return NodeAggregateIdentifier
     */
    public function getNodeAggregateIdentifier(): NodeAggregateIdentifier
    {
        return $this->nodeAggregateIdentifier;
    }

    /**
     * @return NodeTypeName
     */
    public function getNodeTypeName(): NodeTypeName
    {
        return $this->nodeTypeName;
    }

    /**
     * @return DimensionSpacePoint
     */
    public function getDimensionSpacePoint(): DimensionSpacePoint
    {
        return $this->dimensionSpacePoint;
    }

    /**
     * @return DimensionSpacePointSet
     */
    public function getVisibleDimensionSpacePoints(): DimensionSpacePointSet
    {
        return $this->visibleDimensionSpacePoints;
    }

    /**
     * @return NodeIdentifier
     */
    public function getNodeIdentifier(): NodeIdentifier
    {
        return $this->nodeIdentifier;
    }

    /**
     * @return NodeIdentifier
     */
    public function getParentNodeIdentifier(): NodeIdentifier
    {
        return $this->parentNodeIdentifier;
    }

    /**
     * @return NodeName
     */
    public function getNodeName(): NodeName
    {
        return $this->nodeName;
    }

    /**
     * @return array
     */
    public function getPropertyDefaultValuesAndTypes(): array
    {
        return $this->propertyDefaultValuesAndTypes;
    }

    /**
     * @return array<NodeIdentifierAndDimensionSpacePointSet>
     */
    public function getNodeVisibilityChanges(): array
    {
        return $this->nodeVisibilityChanges;
    }

}