<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\smartadmin;

use Yii;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Breadcrumbs displays a list of links indicating the position of the current page in the whole site hierarchy.
 *
 * For example, breadcrumbs like "Home / Sample Post / Edit" means the user is viewing an edit page
 * for the "Sample Post". He can click on "Sample Post" to view that page, or he can click on "Home"
 * to return to the homepage.
 *
 * To use Breadcrumbs, you need to configure its [[links]] property, which specifies the links to be displayed. For example,
 *
 * ```php
 * // $this is the view object currently being used
 * echo MainBreadcrumbs::widget([
 *     'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
 *     'links' => [
 *         [
 *             'label' => 'Post Category',
 *             'url' => ['post-category/view', 'id' => 10],
 *             'template' => "<li><b>{link}</b></li>\n", // template for this link only
 *         ],
 *         ['label' => 'Sample Post', 'url' => ['post/edit', 'id' => 1]],
 *         'Edit',
 *     ],
 * ]);
 * ```
 *
 * Because breadcrumbs usually appears in nearly every page of a website, you may consider placing it in a layout view.
 * You can use a view parameter (e.g. `$this->params['breadcrumbs']`) to configure the links in different
 * views. In the layout view, you assign this view parameter to the [[links]] property like the following:
 *
 * ```php
 * // $this is the view object currently being used
 * echo MainBreadcrumbs::widget([
 *     'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
 * ]);
 * ```
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MainBreadcrumbs extends Widget
{
    /**
     * @var array the HTML attributes for the breadcrumb container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['class' => 'breadcrumb'];
    /**
     * @var boolean whether to HTML-encode the link labels.
     */
    public $encodeLabels = true;
    /**
     * @var array the first hyperlink in the breadcrumbs (called home link).
     * Please refer to [[links]] on the format of the link.
     * If this property is not set, it will default to a link pointing to [[\yii\web\Application::homeUrl]]
     * with the label 'Home'. If this property is false, the home link will not be rendered.
     */
    public $homeLink;

    /**
     * @var array list of links to appear in the breadcrumbs. If this property is empty,
     * the widget will not render anything. Each array element represents a single link in the breadcrumbs
     * with the following structure:
     *
     * ```php
     * [
     *     'label' => 'label of the link',  // required
     *     'url' => 'url of the link',      // optional, will be processed by Url::to()
     *     'template' => 'own template of the item', // optional, if not set $this->itemTemplate will be used
     * ]
     * ```
     *
     * If a link is active, you only need to specify its "label", and instead of writing `['label' => $label]`,
     * you may simply use `$label`.
     *
     * Since version 2.0.1, any additional array elements for each link will be treated as the HTML attributes
     * for the hyperlink tag. For example, the following link specification will generate a hyperlink
     * with CSS class `external`:
     *
     * ```php
     * [
     *     'label' => 'demo',
     *     'url' => 'http://example.com',
     *     'class' => 'external',
     * ]
     * ```
     *
     * Since version 2.0.3 each individual link can override global [[encodeLabels]] param like the following:
     *
     * ```php
     * [
     *     'label' => '<strong>Hello!</strong>',
     *     'encode' => false,
     * ]
     * ```
     *
     */
    public $breadcrumbs = [];

    /**
     * @var string the template used to render each inactive item in the breadcrumbs. The token `{link}`
     * will be replaced with the actual HTML link for each inactive item.
     */
    public $itemTemplate = "<span>&gt; {breadcrumb}</span>\n";

    /**
     * @var string the template used to render each active item in the breadcrumbs. The token `{link}`
     * will be replaced with the actual HTML link for each active item.
     */
    public $activeItemTemplate = "<span>&gt; {breadcrumb}</span>\n";


    /**
     * Renders the widget.
     */
    public function run()
    {
        if (empty($this->breadcrumbs)) {
            return;
        }
        $links = [];
        if ($this->homeLink === null) {
            $links[] = $this->renderItem([
                'label' => Yii::t('yii', 'Home'),
                'url' => Yii::$app->homeUrl,
            ], "{breadcrumb}\n");
        } elseif ($this->homeLink !== false) {
            $links[] = $this->renderItem($this->homeLink, $this->itemTemplate);
        }
        foreach ($this->breadcrumbs as $breadcrumb) {
            if (!is_array($breadcrumb)) {
                $breadcrumb = ['label' => $breadcrumb];
            }
            $links[] = $this->renderItem($breadcrumb, isset($breadcrumb['url']) ? $this->itemTemplate : $this->activeItemTemplate);
        }
        echo implode('', $links);
    }

    /**
     * Renders a single breadcrumb item.
     * @param array $breadcrumb the breadcrumb to be rendered. It must contain the "label" element.
     * @param string $template the template to be used to rendered the link. The token "{link}" will be replaced by the link.
     * @return string the rendering result
     * @throws InvalidConfigException if `$link` does not have "label" element.
     */
    protected function renderItem($breadcrumb, $template)
    {
        $encodeLabel = ArrayHelper::remove($breadcrumb, 'encode', $this->encodeLabels);
        if (array_key_exists('label', $breadcrumb)) {
            $label = $encodeLabel ? Html::encode($breadcrumb['label']) : $breadcrumb['label'];
        } else {
            throw new InvalidConfigException('The "label" element is required for each breadcrumb.');
        }
        if (isset($link['template'])) {
            $template = $breadcrumb['template'];
        }

        $breadcrumb = $label;

        return strtr($template, ['{breadcrumb}' => $breadcrumb]);
    }
}
