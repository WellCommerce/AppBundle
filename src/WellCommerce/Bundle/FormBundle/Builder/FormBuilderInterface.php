<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\FormBundle\Builder;

/**
 * Interface FormBuilderInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface FormBuilderInterface
{
    /**
     * Creates the form, triggers init event and then populates form with values
     *
     * @param array $options
     * @param null  $formData
     *
     * @return \WellCommerce\Bundle\FormBundle\Elements\FormInterface
     */
    public function createForm($options, $formData = null);

    /**
     * Returns an element object by its type
     *
     * @param string $type
     * @param array  $options
     *
     * @return \WellCommerce\Bundle\FormBundle\Elements\ElementInterface
     */
    public function getElement($type, array $options = []);

    /**
     * Returns a rule object by its type
     *
     * @param string $type
     * @param array  $options
     *
     * @return \WellCommerce\Bundle\FormBundle\Rules\RuleInterface
     */
    public function getRule($type, array $options = []);

    /**
     * Returns a filter object by its type
     *
     * @param string $type
     * @param array  $options
     *
     * @return \WellCommerce\Bundle\FormBundle\Filters\FilterInterface
     */
    public function getFilter($type, array $options = []);

    /**
     * Returns a dependency object by its type
     *
     * @param string $type
     * @param array  $options
     *
     * @return \WellCommerce\Bundle\FormBundle\Dependencies\DependencyInterface
     */
    public function getDependency($type, array $options = []);
}
