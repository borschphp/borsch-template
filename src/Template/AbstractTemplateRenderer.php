<?php
/**
 * @author debuss-a
 */

namespace Borsch\Template;

/**
 * Class AbstractTemplateRenderer
 * @package Borsch\Template
 */
abstract class AbstractTemplateRenderer implements TemplateRendererInterface
{

    /** @var string[] */
    protected $paths = [];

    /** @var array */
    protected $parameters = [];

    /**
     * @inheritDoc
     */
    public function addPath(string $path, ?string $namespace = null): void
    {
        if ($namespace) {
            $this->paths[$namespace] = $path;
        } else {
            $this->paths[] = $path;
        }
    }

    /**
     * @inheritDoc
     */
    public function getPaths(): array
    {
        return $this->paths;
    }

    /**
     * @inheritDoc
     */
    public function assign(array $params): void
    {
        $this->parameters = array_merge(
            $this->parameters,
            $params
        );
    }
}
