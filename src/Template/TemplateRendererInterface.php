<?php
/**
 * @author debuss-a
 */

namespace Borsch\Template;

/**
 * Interface TemplateRendererInterface
 * @package Borsch\Template
 */
interface TemplateRendererInterface
{

    /**
     * Add a template path with optional namespace.
     *
     * @param string $path
     * @param null|string $namespace
     */
    public function addPath(string $path, ?string $namespace = null): void;

    /**
     * Get the registered template path, where keys are namespaces and values are paths.
     *
     * @return string[]
     */
    public function getPaths(): array;

    /**
     * Assign global parameters to the template engine, where the keys MUST be a string identifier (values can be
     * anything).
     *
     * If a key already exists then it MUST be overwritten with the new value.
     *
     * @param array $params
     */
    public function assign(array $params): void;

    /**
     * Render a template, with parameters if provided.
     *
     * Implementations MUST support the `namespace::template` naming convention, where `namespace` is the path of the
     * `template` file.
     *
     * Filename extension can be omitted so implementer can simply pass the template name no matter what is the engine
     * being used, therefore implementation MUST allow it.
     *
     * @param string $name
     * @param array $params
     * @return string
     */
    public function render(string $name, array $params = []): string;
}
