<?php
/**
 * Generated stub declarations for dokan.
 * @see https://dokan.co
 * @see https://github.com/mralaminahamed/phpstan-dokan-stubs
 */

namespace Dokan\Traits {
    /**
     * Singleton Trait
     *
     * @since 1.0.0
     */
    trait Singleton
    {
        /**
         * Singleton class instance holder
         *
         * @since 1.0.0
         *
         * @var object
         */
        protected static $instance;
        /**
         * Make a class instance
         *
         * @since 1.0.0
         *
         * @return object
         */
        public static function instance()
        {
        }
    }
}
namespace WeDevs\Dokan\Abstracts {
    /**
     * Abstract Dokan_Background_Processes class
     */
    abstract class DokanBackgroundProcesses extends \WP_Background_Process
    {
        /**
         * Action
         *
         * Override this action in your processor class
         *
         * @since 2.8.7
         *
         * @var string
         */
        protected $action = null;
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Execute after complete a task
         *
         * @since 2.8.7
         *
         * @return void
         */
        public function complete()
        {
        }
        /**
         * Schedule cron healthcheck
         *
         * This override method supports cron_interval
         * property in extended child class.
         *
         * @see https://github.com/woocommerce/woocommerce/pull/21353
         *
         * @since 2.8.7
         *
         * @param mixed $schedules Schedules.
         *
         * @return mixed
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Cancel background process
         *
         * Override method to clear dokan_background_processes option
         *
         * @since 2.8.7
         *
         * @return void
         */
        public function cancel_process()
        {
        }
        /**
         * Set process action
         *
         * @since 3.0.0
         *
         * @return void
         */
        protected function set_action()
        {
        }
        /**
         * Dispatch process
         *
         * Calls save and dispatch and update dokan_background_processes option
         *
         * @since 2.8.7
         *
         * @param string $processor_file
         *
         * @return $this
         */
        public function dispatch_process($processor_file = null)
        {
        }
        /**
         * Clean up dokan_background_processes option
         *
         * @since 2.8.7
         *
         * @return $this
         */
        public function clear_process()
        {
        }
    }
}
namespace {
    /**
     * Abstract Dokan_Background_Processes class
     */
    abstract class Abstract_Dokan_Background_Processes extends \WeDevs\Dokan\Abstracts\DokanBackgroundProcesses
    {
    }
}
namespace WeDevs\Dokan\Abstracts {
    /**
    * Admin Dashboard
    *
    * @since 2.8.0
    *
    * @package dokan
    */
    abstract class DokanRESTAdminController extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'dokan/v1/admin';
        /**
         * Perform permission checking
         *
         * @since 2.8.0
         *
         * @return void
         */
        public function check_permission()
        {
        }
        /**
         * Format item's collection for response
         *
         * @param  object $response
         * @param  object $request
         * @param  array $items
         * @param  int $total_items
         *
         *  @since 2.9.8
         *
         * @return object
         */
        public function format_collection_response($response, $request, $total_items)
        {
        }
    }
}
namespace {
    abstract class Dokan_REST_Admin_Controller extends \WeDevs\Dokan\Abstracts\DokanRESTAdminController
    {
    }
    /**
    * Fallback for depricated
    * Dokan Email Class
    */
    class Dokan_Email
    {
        public static function init()
        {
        }
    }
}
namespace WeDevs\Dokan\Abstracts {
    /**
    * Base REST Controller for dokan
    *
    * @since 2.8.0
    *
    * @package dokan
    */
    abstract class DokanRESTController extends \WP_REST_Controller
    {
        /**
         * Get object.
         *
         * @param  int $id Object ID.
         * @return object WC_Data object or WP_Error object.
         */
        protected function get_object($id)
        {
        }
        /**
         * Get a collection of posts.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get Item for an object
         *
         * @since 2.8.0
         *
         * @return object
         */
        public function get_item($request)
        {
        }
        /**
         * Create Item
         *
         * @since 2.8.0
         *
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update an Item
         *
         * @since 2.8.0
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete an item
         *
         * @since 2.8.0
         *
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare_object_for_database
         *
         * @since 2.8.0
         *
         * @return void
         */
        protected function prepare_object_for_database($request)
        {
        }
        /**
         * Prepares a response for insertion into a collection.
         *
         * @since 4.7.0
         *
         * @param WP_REST_Response $response Response object.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function prepare_response_for_collection($response)
        {
        }
        /**
         * Validate before create an Item
         *
         * @since 2.8.0
         *
         * @return bool|WP_Error
         */
        protected function validation_before_create_item($request)
        {
        }
        /**
         * Validate before update an Item
         *
         * @since 2.8.0
         *
         * @return bool|WP_Error
         */
        protected function validation_before_update_item($request)
        {
        }
        /**
         * Validate before delete an Item
         *
         * @since 2.8.0
         *
         * @return bool|WP_Error
         */
        protected function validation_before_delete_item($request)
        {
        }
        /**
         * Prepares the object for the REST response.
         *
         * @since  2.8.0
         * @param  Dokan_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_Error|WP_REST_Response Response object on success, or WP_Error object on failure.
         */
        protected function prepare_data_for_response($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  2.8.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Determine the allowed query_vars for a get_items() response and
         * prepare for WP_Query.
         *
         * @param array           $prepared_args
         * @param WP_REST_Request $request
         * @return array          $query_args
         */
        protected function prepare_items_query($prepared_args = array(), $request = null)
        {
        }
        /**
         * Get all the WP Query vars that are allowed for the API request.
         *
         * @return array
         */
        protected function get_allowed_query_vars()
        {
        }
        /**
         * Format item's collection for response
         *
         * @param  WP_REST_Response $response
         * @param  WP_REST_Request $request
         * @param  int $total_items
         *
         * @return WP_REST_Response
         */
        public function format_collection_response($response, $request, $total_items)
        {
        }
        /**
         * Update post author if requested.
         *
         * @since 3.10.3
         *
         * @param WP_REST_Request $request Request object.
         * @param int $object_id Object ID.
         *
         * @return void
         */
        public function update_post_author_if_needed(\WP_REST_Request $request, int $object_id)
        {
        }
        /**
         * Add meta query.
         *
         * @since 3.0.2
         *
         * @param array $args       Query args.
         * @param array $meta_query Meta query.
         *
         * @return array
         */
        protected function add_meta_query($args, $meta_query)
        {
        }
    }
}
namespace {
    class Dokan_REST_Controller extends \WeDevs\Dokan\Abstracts\DokanRESTController
    {
    }
}
namespace WeDevs\Dokan\REST {
    /**
     * Store API Controller
     *
     * phpcs:disable WordPress.WP.Capabilities.Unknown
     *
     * @package dokan
     *
     * @author weDevs <info@wedevs.com>
     */
    class ProductController extends \WeDevs\Dokan\Abstracts\DokanRESTController
    {
        /**
         * Endpoint namespace
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Route name
         *
         * @var string
         */
        protected $base = 'products';
        /**
         * Post type
         *
         * @var string
         */
        protected $post_type = 'product';
        /**
         * Post status
         */
        protected $post_status = ['publish', 'pending', 'draft'];
        /**
         * Register all routes related with stores
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get product object
         *
         * @since 2.8.0
         *
         * @return WC_Product|null|false
         */
        public function get_object($id)
        {
        }
        /**
         * Validation_before_create_product
         *
         * @param $request
         *
         * @since 1.0.0
         *
         * @return bool|WP_Error
         */
        public function validation_before_create_item($request)
        {
        }
        /**
         * Validation before update product
         *
         * @param $request
         *
         * @since 2.8.0
         *
         * @return bool|WP_Error
         */
        public function validation_before_update_item($request)
        {
        }
        /**
         * Validation_before_delete_item
         *
         * @since 2.8.0
         *
         * @return WP_Error|Boolean
         */
        public function validation_before_delete_item($request)
        {
        }
        /**
         * Get product permissions check
         *
         * @since 2.8.0
         *
         * @return bool
         */
        public function get_product_permissions_check()
        {
        }
        /**
         * Create_product_permissions_check
         *
         * @since 2.8.0
         *
         * @return bool
         */
        public function create_product_permissions_check()
        {
        }
        /**
         * Get_single_product_permissions_check
         *
         * @since 2.8.0
         *
         * @return bool
         */
        public function get_single_product_permissions_check()
        {
        }
        /**
         * Update_product_permissions_check
         *
         * @since 2.8.0
         *
         * @return bool
         */
        public function update_product_permissions_check()
        {
        }
        /**
         * Delete product permission checking
         *
         * @since 2.8.0
         *
         * @return bool
         */
        public function delete_product_permissions_check()
        {
        }
        /**
         * Get product summary report
         *
         * @since 2.8.0
         *
         * @return bool
         */
        public function get_product_summary_permissions_check()
        {
        }
        /**
         * Get product summary report in dashboard
         *
         * @since 2.8.0
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_product_summary($request)
        {
        }
        /**
         * Get related product
         *
         * @since 2.9.1
         *
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_related_product($request)
        {
        }
        /**
         * Top rated product
         *
         * @since 2.9.1
         *
         * @return array|object|WP_Error|WP_REST_Response
         */
        public function get_top_rated_product($request)
        {
        }
        /**
         * Best selling product
         *
         * @since 2.9.1
         *
         * @return WP_REST_Response|array|WP_Error
         */
        public function get_best_selling_product($request)
        {
        }
        /**
         * Featured product
         *
         * @since 2.9.1
         *
         * @return WP_REST_Response|array|WP_Error
         */
        public function get_featured_product($request)
        {
        }
        /**
         * Latest product
         *
         * @since 2.9.1
         *
         * @return WP_REST_Response|array|WP_Error
         */
        public function get_latest_product($request)
        {
        }
        /**
         * Validate post author overrides.
         *
         * @since 3.10.3
         *
         * @param WP_REST_Request $request Request object.
         * @param int $store_id fallback Store or author id.
         *
         * @return int
         */
        public function validate_post_author_override(\WP_REST_Request $request, int $store_id) : int
        {
        }
        /**
         * Prepare objects query
         *
         * @param WP_REST_Request|array $request
         *
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get product data.
         *
         * @param WC_Product $product Product instance.
         * @param WP_REST_Request $request Request context.
         *                            Options: 'view' and 'edit'.
         *
         * @return WP_REST_Response|array|WP_Error
         */
        protected function prepare_data_for_response($product, $request)
        {
        }
        /**
         * Prepare object for database mapping
         *
         * @param WP_REST_Request $request
         * @param boolean $creating
         *
         * @return object
         * @throws WC_REST_Exception
         * @throws \WC_Data_Exception
         */
        protected function prepare_object_for_database($request, $creating = false)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data $object Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Get taxonomy terms.
         *
         * @param WC_Product $product Product instance.
         * @param string $taxonomy Taxonomy slug.
         *
         * @return array
         */
        protected function get_taxonomy_terms($product, $taxonomy = 'cat')
        {
        }
        /**
         * Get the images for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Get attribute taxonomy label.
         *
         * @param string $name Taxonomy name.
         *
         * @return string
         * @deprecated 2.8.0
         */
        protected function get_attribute_taxonomy_label($name)
        {
        }
        /**
         * Get product attribute taxonomy name.
         *
         * @param string $slug Taxonomy name.
         * @param WC_Product $product Product data.
         *
         * @since  2.8.0
         * @return string
         */
        protected function get_attribute_taxonomy_name($slug, $product)
        {
        }
        /**
         * Get default attributes.
         *
         * @param WC_Product $product Product instance.
         *
         * @return array
         */
        protected function get_default_attributes($product)
        {
        }
        /**
         * Get attribute options.
         *
         * @param int $product_id Product ID.
         * @param array $attribute Attribute data.
         *
         * @return array
         */
        protected function get_attribute_options($product_id, $attribute)
        {
        }
        /**
         * Get the attributes for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_attributes($product)
        {
        }
        /**
         * Get the downloads for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_downloads($product)
        {
        }
        /**
         * Set product images.
         *
         * @param WC_Product $product Product instance.
         * @param array $images Images data.
         *
         * @return WC_Product
         * @throws WC_REST_Exception REST API exceptions.
         */
        protected function set_product_images($product, $images)
        {
        }
        /**
         * Save product shipping data.
         *
         * @param WC_Product $product Product instance.
         * @param array $data Shipping data.
         *
         * @return WC_Product
         */
        protected function save_product_shipping_data($product, $data)
        {
        }
        /**
         * Save downloadable files.
         *
         * @param WC_Product $product Product instance.
         * @param array $downloads Downloads data.
         * @param int $deprecated Deprecated since 3.0.
         *
         * @return WC_Product
         */
        protected function save_downloadable_files($product, $downloads, $deprecated = 0)
        {
        }
        /**
         * Save taxonomy terms.
         *
         * @param WC_Product $product Product instance.
         * @param array $terms Terms data.
         * @param string $taxonomy Taxonomy name.
         *
         * @return WC_Product
         */
        protected function save_taxonomy_terms($product, $terms, $taxonomy = 'cat')
        {
        }
        /**
         * Save default attributes.
         *
         * @param WC_Product $product Product instance.
         * @param WP_REST_Request $request Request data.
         *
         * @since 3.0.0
         *
         * @return WC_Product
         */
        protected function save_default_attributes($product, $request)
        {
        }
        /**
         * Returns all categories.
         *
         * @since 3.6.2
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_multistep_categories()
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace {
    class Dokan_REST_Product_Controller extends \WeDevs\Dokan\REST\ProductController
    {
        public function __construct()
        {
        }
    }
}
namespace WeDevs\Dokan\REST {
    /**
     * Store API Controller
     *
     * @package dokan
     *
     * @author weDevs <info@wedevs.com>
     */
    class StoreController extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Route name
         *
         * @var string
         */
        protected $base = 'stores';
        /**
         * Register all routes releated with stores
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get stores
         *
         * @since 1.0.0
         *
         * @param $request
         *
         * @return object|WP_Error|WP_REST_Response
         */
        public function get_stores($request)
        {
        }
        /**
         * Get singe store
         *
         * @since 1.0.0
         *
         * @param $request
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_store($request)
        {
        }
        /**
         * Delete store
         *
         * @since 2.8.0
         *
         * @param $request
         *
         * @return WP_Error|WP_REST_Response
         */
        public function delete_store($request)
        {
        }
        /**
         * Update store permission check method
         *
         * @param $request
         *
         * @since 2.9.2
         *
         * @return bool
         */
        public function update_store_permissions_check($request)
        {
        }
        /**
         * Update Store
         *
         * @since 2.9.2
         *
         * @param WP_REST_Request $request
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_store($request)
        {
        }
        /**
         * Create store
         *
         * @param $request
         *
         * @return WP_Error|WP_REST_Response
         */
        public function create_store($request)
        {
        }
        /**
         * Undocumented function
         *
         * @since 1.0.0
         *
         * @return bool
         */
        public function permission_check_for_manageable_part()
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param \WC_Data $object Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Format item's collection for response
         *
         * @param object $response
         * @param object $request
         * @param int $total_items
         *
         * @return object
         */
        public function format_collection_response($response, $request, $total_items)
        {
        }
        /**
         * Get store Products
         *
         * @param WP_REST_Request|array $request
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_store_products($request)
        {
        }
        /**
         * Get store reviews
         *
         * @since 2.8.0
         *
         * @return object|WP_Error|WP_REST_Response
         */
        public function get_store_reviews($request)
        {
        }
        /**
         * Get total counting for store review
         *
         * @param integer $id [hold store id]
         * @param string $post_type
         * @param string $status
         *
         * @since 2.8.0
         *
         * @return integer
         */
        public function get_total_review_count($id, $post_type, $status)
        {
        }
        /**
         * Prepare a single user output for response
         *
         * @param $store
         * @param WP_REST_Request $request Request object.
         * @param array $additional_fields (optional)
         *
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($store, $request, $additional_fields = [])
        {
        }
        /**
         * Prepare a single user output for response
         *
         * @param object $item
         * @param WP_REST_Request $request Request object.
         * @param array $additional_fields (optional)
         *
         * @return array $response Response data.
         */
        public function prepare_reviews_for_response($item, $request, $additional_fields = [])
        {
        }
        /**
         * Check store availability
         *
         * @param WP_REST_Request $request
         *
         * @since 2.9.13
         *
         * @return WP_REST_Response
         */
        public function check_store_availability($request)
        {
        }
        /**
         * Send email to vendor
         *
         * @param WP_REST_Request
         *
         * @since 2.9.23
         *
         * @return WP_REST_Response
         */
        public function send_email($request)
        {
        }
        /**
         * Update vendor status
         *
         * @since 2.9.23
         *
         * @return WP_REST_Response|WP_Error
         */
        public function update_vendor_status($request)
        {
        }
        /**
         * Batch update for vendor listing
         *
         * @param $request
         *
         * @since 2.9.23
         *
         * @return array|WP_Error
         */
        public function batch_update($request)
        {
        }
        /**
         * Get singe store
         *
         * @since 3.2.11
         *
         * @param $request
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_store_category($request)
        {
        }
        /**
         * Retrieves the query params for the collections.
         *
         * @since 3.7.22
         *
         * @return array Query parameters for the collection.
         */
        public function get_store_collection_params() : array
        {
        }
    }
}
namespace {
    class Dokan_REST_Store_Controller extends \WeDevs\Dokan\REST\StoreController
    {
    }
}
namespace WeDevs\Dokan\Admin {
    /**
     * Setup wizard class
     *
     * Walkthrough to the basic setup upon installation
     */
    class SetupWizard
    {
        /** @var string Currenct Step */
        protected $step = '';
        /** @var array Steps for the setup wizard */
        protected $steps = [];
        /**
         * Actions to be executed after the HTTP response has completed
         *
         * @var array
         */
        private $deferred_actions = [];
        /**
         * Hook in tabs.
         */
        public function __construct()
        {
        }
        /**
         * Give manage_woocommerce cap to admin if not there.
         *
         * @param array $caps
         *
         * @return array
         */
        public function set_user_cap($caps)
        {
        }
        /**
         * Enqueue scripts & styles
         *
         * @return void
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Helper method to get postcode configurations from `WC()->countries->get_country_locale()`.
         * We don't use `wp_list_pluck` because it will throw notices when postcode configuration is not defined for a country.
         *
         * @return array
         */
        protected static function get_postcodes()
        {
        }
        /**
         * Add admin menus/screens.
         */
        public function admin_menus()
        {
        }
        /**
         * Set wizard steps
         *
         * @since 2.9.27
         *
         * @return void
         */
        protected function set_steps()
        {
        }
        /**
         * Get wizard steps
         *
         * @since 2.9.27
         *
         * @return array
         */
        public function get_steps()
        {
        }
        /**
         * Wizard templates
         *
         * @since 2.9.27
         *
         * @return void
         */
        protected function set_setup_wizard_template()
        {
        }
        /**
         * Show the setup wizard.
         */
        public function setup_wizard()
        {
        }
        public function get_next_step_link()
        {
        }
        /**
         * Setup Wizard Header.
         */
        public function setup_wizard_header()
        {
        }
        /**
         * Setup Wizard Footer.
         */
        public function setup_wizard_footer()
        {
        }
        /**
         * Output the steps.
         */
        public function setup_wizard_steps()
        {
        }
        /**
         * Output the content for the current step.
         */
        public function setup_wizard_content()
        {
        }
        /**
         * Introduction step.
         */
        public function dokan_setup_introduction()
        {
        }
        /**
         * Store step.
         */
        public function dokan_setup_store()
        {
        }
        /**
         * Save store options.
         */
        public function dokan_setup_store_save()
        {
        }
        /**
         * Selling step.
         */
        public function dokan_setup_selling()
        {
        }
        /**
         * Save selling options.
         */
        public function dokan_setup_selling_save()
        {
        }
        /**
         * Withdraw Step.
         */
        public function dokan_setup_withdraw()
        {
        }
        /**
         * Recommended Step
         *
         * @since 2.8.7
         *
         * @return void
         */
        public function dokan_setup_recommended()
        {
        }
        /**
         * Save data from recommended step
         *
         * @since 2.8.7
         *
         * @return void
         */
        public function dokan_setup_recommended_save()
        {
        }
        /**
         * Save withdraw options.
         */
        public function dokan_setup_withdraw_save()
        {
        }
        /**
         * Final step.
         */
        public function dokan_setup_ready()
        {
        }
        /**
         * Should we display the 'Recommended' step?
         *
         * True if at least one of the recommendations will be displayed.
         *
         * @return boolean
         */
        protected function should_show_recommended_step()
        {
        }
        /**
         * Check if WC Conversion Tracking is active or not
         *
         * @since 2.8.7
         *
         * @return bool
         */
        protected function is_wc_conversion_tracking_active()
        {
        }
        /**
         * Check if weMail is active or not
         *
         * @since 3.0.0
         *
         * @return bool
         */
        protected function is_wemail_active()
        {
        }
        /**
         * Check if texty is active or not
         *
         * @since 3.2.11
         *
         * @return bool
         */
        protected function is_texty_active()
        {
        }
        /**
         * Should we show the WooCommerce Conversion Tracking install option?
         *
         * True only if the user can install plugins.
         *
         * @return boolean
         */
        protected function user_can_install_plugin()
        {
        }
        protected function display_recommended_item($item_info)
        {
        }
        /**
         * Plugin install info message markup with heading.
         */
        public function plugin_install_info()
        {
        }
        /**
         * Helper method to queue the background install of a plugin.
         *
         * @param string $plugin_id   Plugin id used for background install.
         * @param array  $plugin_info Plugin info array containing name and repo-slug, and optionally file if different from [repo-slug].php.
         */
        protected function install_plugin($plugin_id, $plugin_info)
        {
        }
        /**
         * Function called after the HTTP request is finished, so it's executed without the client having to wait for it.
         *
         * @see WC_Admin_Setup_Wizard::install_plugin
         * @see WC_Admin_Setup_Wizard::install_theme
         */
        public function run_deferred_actions()
        {
        }
        /**
         * Finishes replying to the client, but keeps the process running for further (async) code execution.
         *
         * @see https://core.trac.wordpress.org/ticket/41358 .
         */
        protected function close_http_connection()
        {
        }
    }
}
namespace WeDevs\Dokan\Vendor {
    /**
     * Seller setup wizard class
     */
    class SetupWizard extends \WeDevs\Dokan\Admin\SetupWizard
    {
        /** @var string Currenct Step */
        protected $step = '';
        /** @var array Steps for the setup wizard */
        protected $steps = [];
        /** @var string custom logo url of the theme */
        protected $custom_logo = '';
        /**
         * @var int
         */
        public $store_id;
        /**
         * @var array
         */
        public $store_info;
        /**
         * Hook in tabs.
         */
        public function __construct()
        {
        }
        // define the woocommerce_registration_redirect callback
        public function filter_woocommerce_registration_redirect($var)
        {
        }
        /**
         * Show the setup wizard.
         */
        public function setup_wizard()
        {
        }
        /**
         * Enqueue vendor setup wizard scripts
         *
         * @since 3.7.0
         *
         * @return void
         */
        public function frontend_enqueue_scripts()
        {
        }
        /**
         * Setup Wizard Header.
         */
        public function setup_wizard_header()
        {
        }
        /**
         * Setup Wizard Footer.
         */
        public function setup_wizard_footer()
        {
        }
        /**
         * Introduction step.
         */
        public function dokan_setup_introduction()
        {
        }
        /**
         * Store step.
         */
        public function dokan_setup_store()
        {
        }
        /**
         * Save store options.
         */
        public function dokan_setup_store_save()
        {
        }
        /**
         * Payment step.
         */
        public function dokan_setup_payment()
        {
        }
        /**
         * Save payment options.
         */
        public function dokan_setup_payment_save()
        {
        }
        /**
         * Final step.
         */
        public function dokan_setup_ready()
        {
        }
    }
}
namespace {
    class Dokan_Seller_Setup_Wizard extends \WeDevs\Dokan\Vendor\SetupWizard
    {
    }
}
namespace WeDevs\Dokan\Walkers {
    class Category extends \Walker
    {
        public $tree_type = 'category';
        public $db_fields = ['parent' => 'parent', 'id' => 'term_id'];
        //TODO: decouple this
        public function start_lvl(&$output, $depth = 0, $args = [])
        {
        }
        public function end_lvl(&$output, $depth = 0, $args = [])
        {
        }
        public function start_el(&$output, $category, $depth = 0, $args = [], $id = 0)
        {
        }
        public function end_el(&$output, $category, $depth = 0, $args = [])
        {
        }
    }
}
namespace {
    class Dokan_Store_Category_Walker extends \WeDevs\Dokan\Walkers\Category
    {
    }
    class Dokan_Store_Location
    {
    }
    class DokanTaxonomyWalker extends \WeDevs\Dokan\Walkers\TaxonomyDropdown\DokanTaxonomyWalker
    {
    }
}
namespace WeDevs\Dokan\Dashboard\Templates {
    /**
     * Dokan Template Dashboard Class
     *
     * @author weDves
     */
    class Dashboard
    {
        /**
         * @var int $user_id current user id
         */
        protected $user_id;
        /**
         * @var array $order_count
         */
        protected $orders_count;
        /**
         * Load autometically when class inistantiate
         * hooked up all actions and filters
         *
         * @since 2.4
         */
        public function __construct()
        {
        }
        /**
         * Get Seller Dashboard Notice
         *
         * @since 2.4
         *
         * @return void
         */
        public function show_seller_dashboard_notice()
        {
        }
        /**
         * Get big counter widget in dashboard
         *
         * @since 2.4
         *
         * @return void
         */
        public function get_big_counter_widgets()
        {
        }
        /**
         * Get order widget in Dashboard
         *
         * @since 2.4
         *
         * @return void
         */
        public function get_orders_widgets()
        {
        }
        /**
         * Get product widgets in dashboard
         *
         * @since 2.4
         *
         * @return void
         */
        public function get_products_widgets()
        {
        }
        /**
         * Get sales report chart widget in dashboard
         *
         * @since 2.4
         *
         * @return void
         */
        public function get_sales_report_chart_widget()
        {
        }
        /**
         * Get orders Count
         *
         * @since 2.4
         *
         * @return array
         */
        public function get_orders_count()
        {
        }
        /**
         * Get Post Count
         *
         * @since 2.4
         *
         * @return array
         */
        public function get_post_counts()
        {
        }
        /**
         * Get Comments Count
         *
         * @since 2.4
         *
         * @return array
         */
        public function get_comment_counts()
        {
        }
        /**
         * Get Pageview Count
         *
         * @since 2.4
         *
         * @return integer
         */
        public function get_pageviews()
        {
        }
        /**
         * Get Author Sales Count
         *
         * @since 2.4
         *
         * @return integer
         */
        public function get_earning()
        {
        }
        /**
         * Get Seller Balance
         *
         * @since 2.4
         *
         * @return integer
         */
        public function get_seller_balance()
        {
        }
    }
}
namespace {
    class Dokan_Template_Dashboard extends \WeDevs\Dokan\Dashboard\Templates\Dashboard
    {
    }
}
namespace WeDevs\Dokan\Dashboard\Templates {
    /**
     *  Product Functionality for Product Handler
     *
     * @since   2.4
     *
     * @package dokan
     */
    class Products
    {
        public static $errors;
        public static $product_cat;
        public static $post_content;
        /**
         *  Load autometially when class initiate
         *
         * @since 2.4
         *
         * @uses  actions
         * @uses  filters
         */
        public function __construct()
        {
        }
        /**
         * Set errors
         *
         * @since 3.0.0
         *
         * @param void $errors
         *
         * @return void
         */
        public function set_errors($errors)
        {
        }
        /**
         * Verify if the instance contains errors
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function has_errors()
        {
        }
        /**
         * Retrieve all errors
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_errors()
        {
        }
        /**
         * Load product
         *
         * @since 1.0.0
         *
         * @return void
         */
        public static function load_download_virtual_template($post, $post_id)
        {
        }
        /**
         * Load invendor template
         *
         * @since 2.9.2
         *
         * @return void
         */
        public static function load_inventory_template($post, $post_id)
        {
        }
        /**
         * Load downloadable template
         *
         * @since 2.9.2
         *
         * @return void
         */
        public static function load_downloadable_template($post, $post_id)
        {
        }
        /**
         * Load others item template
         *
         * @since 2.9.2
         *
         * @return void
         */
        public static function load_others_template($post, $post_id)
        {
        }
        /**
         * Render New Product Template for only free version
         *
         * @since 2.4
         *
         * @param array $query_vars
         *
         * @return void
         */
        public function render_new_product_template($query_vars)
        {
        }
        /**
         * Load Product Edit Template
         *
         * @since 2.4
         *
         * @return void
         */
        public function load_product_edit_template()
        {
        }
        /**
         * Render Product Edit Page for Email.
         *
         * @since 3.9.1
         *
         * @return void
         */
        public function render_product_edit_page_for_email()
        {
        }
        /**
         * Render Product Listing Template
         *
         * @since 2.4
         *
         * @param string $action
         *
         * @return void
         */
        public function render_product_listing_template($action)
        {
        }
        /**
         * Handle product add
         *
         * @return void
         */
        public function handle_product_add()
        {
        }
        /**
         * Handle product update
         *
         * @return void
         */
        public function handle_product_update()
        {
        }
        public function load_add_new_product_popup()
        {
        }
        /**
         * Add new product open modal html
         *
         * @since 3.7.0
         *
         * @return void
         */
        public function load_add_new_product_modal()
        {
        }
        /**
         * Handle delete product link
         *
         * @return void
         */
        public function handle_delete_product()
        {
        }
    }
}
namespace {
    class Dokan_Template_Products extends \WeDevs\Dokan\Dashboard\Templates\Products
    {
    }
}
namespace WeDevs\Dokan\Dashboard\Templates {
    /**
     * Dokan settings Class
     *
     * @author weDves
     */
    class Settings
    {
        public $currentuser;
        public $profile_info;
        /**
         * Loading autometically when class initiate
         *
         * @since 2.4
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Show Seller Enable Error Message
         *
         * @since 2.4
         *
         * @return void
         */
        public function show_enable_seller_message()
        {
        }
        /**
         * Render Settings Header
         *
         * @since 2.4
         *
         * @return void
         */
        public function render_settings_header()
        {
        }
        /**
         * Render Settings help
         *
         * @since 2.4
         *
         * @return void
         */
        public function render_settings_help()
        {
        }
        /**
         * Render Settings Progressbar
         *
         * @since 2.4
         *
         * @return void
         */
        public function render_settings_load_progressbar()
        {
        }
        /**
         * Render Settings Content
         *
         * @since 2.4
         *
         * @return void
         */
        public function render_settings_content()
        {
        }
        /**
         * Load Store Content
         *
         * @since 2.4
         *
         * @return void
         */
        public function load_store_content()
        {
        }
        /**
         * Load Payment Content
         *
         * @since 2.4
         *
         * @param string $slug_suffix
         *
         * @return void
         */
        public function load_payment_content($slug_suffix)
        {
        }
        /**
         * Save settings via ajax
         *
         * @since 2.4
         *
         * @return void
         */
        public function ajax_settings()
        {
        }
        /**
         * Validate profile settings
         *
         * @return bool|WP_Error
         */
        private function profile_validate()
        {
        }
        /**
         * Validate store settings
         *
         * @return bool|WP_Error
         */
        private function store_validate()
        {
        }
        /**
         * Validate payment settings
         *
         * @since 2.4
         *
         * @return bool|WP_Error
         */
        private function payment_validate()
        {
        }
        /**
         * Save store settings
         *
         * @return void
         */
        public function insert_settings_info()
        {
        }
        /**
         * Dokan Get Category Format
         *
         * @since 1.0
         *
         * @return array
         */
        public function get_dokan_categories()
        {
        }
        /**
         * Get proper heading for payments of vendor dashboard payment settings
         *
         * @since 3.4.3
         *
         * @param string $slug
         * @param string $heading
         *
         * @return string
         */
        private function get_payment_heading($slug, $heading)
        {
        }
        /**
         * Check if a seller is connected to a payment method
         *
         * @since DOKAN_PRO_SINCE
         *
         * @param $payment_method_id
         * @param $seller_id
         *
         * @return bool
         */
        public function is_seller_connected($payment_method_id, $seller_id)
        {
        }
        /**
         * Get payment method details from the method keys
         *
         * @since 3.4.3
         *
         * @param $method_keys
         *
         * @return array
         */
        private function get_payment_methods($method_keys)
        {
        }
        /**
         * Get Method title to show in frontend
         *
         * @since 3.6.1
         *
         * @return string
         */
        public function get_method_frontend_title($title, $method)
        {
        }
    }
}
namespace {
    class Dokan_Template_Settings extends \WeDevs\Dokan\Dashboard\Templates\Settings
    {
    }
}
namespace WeDevs\Dokan\Vendor {
    /**
     * Dokan Vendor
     *
     * @since 2.6.10
     */
    #[\AllowDynamicProperties]
    class Vendor
    {
        /**
         * Set class public properties
         *
         * @since 3.7.19
         *
         * @return void
         */
        public function __set($key, $value)
        {
        }
        /**
         * Get public properties
         *
         * @since 3.7.19
         *
         * @return mixed|null
         */
        public function __get($key)
        {
        }
        /**
         * The vendor ID
         *
         * @var integer
         */
        public $id = 0;
        /**
         * Holds the user data object
         *
         * @var null|WP_User
         */
        public $data = null;
        /**
         * Holds the store info
         *
         * @var array
         */
        private $shop_data = array();
        /**
         * Holds the chanages data
         *
         * @var array
         */
        private $changes = array();
        /**
         * The constructor
         *
         * @param int|WP_User $vendor
         */
        public function __construct($vendor = null)
        {
        }
        /**
         * Magic method to access vendor properties
         *
         * When you try to access a property by calling a method
         * with 'get_' prefixed, this magic method will look into
         * shop_data for that property.
         *
         * @param string $name
         * @param array  $param
         *
         * @return mixed|void
         */
        public function __call($name, $param)
        {
        }
        /**
         * Vendor info to array
         *
         * @since 2.8
         *
         * @return array
         */
        public function to_array()
        {
        }
        /**
         * Check if key is exist
         *
         * @param $key
         *
         * @return string
         */
        public function get_value($key)
        {
        }
        /**
         * Check if the user is vendor
         *
         * @return boolean
         */
        public function is_vendor()
        {
        }
        /**
         * If the selling capacity is enabled
         *
         * @return boolean
         */
        public function is_enabled()
        {
        }
        /**
         * If the vendor is marked as trusted
         *
         * @return boolean
         */
        public function is_trusted()
        {
        }
        /**
         * If the vendor is marked as featured
         *
         * @return boolean
         */
        public function is_featured()
        {
        }
        /**
         * Populate store info
         *
         * @return void
         */
        public function popluate_store_data()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Getters
        |--------------------------------------------------------------------------
        */
        /**
         * Get the store info by lazyloading
         *
         * @return array
         */
        public function get_shop_info()
        {
        }
        /**
         * Get store info by key
         *
         * @param  string $item
         *
         * @return mixed
         */
        public function get_info_part($item)
        {
        }
        /**
         * Get store ID
         *
         * @since 3.0.0
         *
         * @return int
         */
        public function get_id()
        {
        }
        /**
         * Get the vendor name
         *
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Get the shop name
         *
         * @return string
         */
        public function get_shop_name()
        {
        }
        /**
         * Get the shop URL
         *
         * @return string
         */
        public function get_shop_url()
        {
        }
        /**
         * Get email address
         *
         * @return string
         */
        public function get_email()
        {
        }
        /**
         * Get first name
         *
         * @since 2.8
         *
         * @return string
         */
        public function get_first_name()
        {
        }
        /**
         * Get last name
         *
         * @since 2.8
         *
         * @return string
         */
        public function get_last_name()
        {
        }
        /**
         * Get last name
         *
         * @since 2.8
         *
         * @return string
         */
        public function get_register_date()
        {
        }
        /**
         * Get the shop name
         *
         * @return array
         */
        public function get_social_profiles()
        {
        }
        /**
         * Get the shop payment profiles
         *
         * @return array
         */
        public function get_payment_profiles()
        {
        }
        /**
         * Get the phone name
         *
         * @return string
         */
        public function get_phone()
        {
        }
        /**
         * Get the shop address
         *
         * @return array
         */
        public function get_address()
        {
        }
        /**
         * Get the shop location
         *
         * @return array
         */
        public function get_location()
        {
        }
        /**
         * Get the shop banner
         *
         * @return string
         */
        public function get_banner()
        {
        }
        /**
         * Get the shop banner id
         *
         * @since 2.9.13
         *
         * @return int
         */
        public function get_banner_id()
        {
        }
        /**
         * Get the shop profile icon
         *
         * @since 2.8
         *
         * @return string
         */
        public function get_avatar()
        {
        }
        /**
         * Get shop gravatar id
         *
         * @since 2.9.13
         *
         * @return int
         */
        public function get_avatar_id()
        {
        }
        /**
         * If should show the email
         *
         * @return boolean
         */
        public function show_email()
        {
        }
        /**
         * Check if terms and conditions enabled
         *
         * @since 2.8
         *
         * @return boolean
         */
        public function toc_enabled()
        {
        }
        /**
         * Get terms and conditions
         *
         * @since 2.8
         *
         * @return string
         */
        public function get_toc()
        {
        }
        /**
         * Get a vendor products
         *
         * @return object
         */
        public function get_products()
        {
        }
        /**
         * Get a vendor all published products
         *
         * @since 3.2.11
         *
         * @return array
         */
        public function get_published_products()
        {
        }
        /**
         * Get a vendor all published products
         *
         * @since 3.2.11
         *
         * @return array
         */
        public function get_best_selling_products()
        {
        }
        /**
         * Get a vendor store published products categories
         *
         * @param bool $best_selling
         *
         * @since 3.2.11
         *
         * @return array
         */
        public function get_store_categories($best_selling = false)
        {
        }
        /**
         * Get vendor used terms list.
         *
         * @since 3.5.0
         *
         * @param $vendor_id
         * @param $taxonomy
         *
         * @return array|mixed
         */
        public function get_vendor_used_terms_list($vendor_id, $taxonomy)
        {
        }
        /**
         * Get vendor orders
         *
         * @since 3.0.0
         *
         * @return WP_Error|WC_Order[] objects
         */
        public function get_orders($args = [])
        {
        }
        /**
         * Get the total sales amount of this vendor
         *
         * @return float
         */
        public function get_total_sales()
        {
        }
        /**
         * Get total pageview for all the products
         *
         * @return integer
         */
        public function get_product_views()
        {
        }
        /**
         * Get vendor total earnings
         *
         * @return float|string float if formatted is false, string otherwise
         */
        public function get_earnings($formatted = true, $on_date = '')
        {
        }
        /**
         * Get balance
         *
         * @since 3.0.0
         *
         * @param bool $formatted
         * @param string $on_date
         *
         * @return float|string float if formatted is false, string otherwise
         */
        public function get_balance($formatted = true, $on_date = '')
        {
        }
        /**
         * Get vendor rating
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_rating()
        {
        }
        /**
         * Get vendor readable rating
         *
         * @since 3.0.0
         *
         * @return void|string
         */
        public function get_readable_rating($display = true)
        {
        }
        /**
         * Get vendor percentage
         *
         * @param  integer $product_id
         *
         * @return integer
         */
        public function get_percentage($product_id = 0)
        {
        }
        /**
         * Make vendor active
         *
         * @since 2.8.0
         *
         * @return array
         */
        public function make_active()
        {
        }
        /**
         * Make vendor active
         *
         * @since 2.8.0
         *
         * @return array
         */
        public function make_inactive()
        {
        }
        /**
         * Change product status when toggling seller active status
         *
         * @since 2.6.9
         * @since 3.7.18 introduced new bg process to change product status
         *
         * @param string $task_type
         *
         * @return void
         */
        public function change_product_status($task_type)
        {
        }
        /**
         * Get store opening closing time
         *
         * @return array
         */
        public function get_store_time()
        {
        }
        /**
         * Get store opening closing time
         *
         * @return boolean|null on failure
         */
        public function is_store_time_enabled()
        {
        }
        /**
         * Get store open notice
         *
         * @param string $default_notice
         *
         * @return string
         */
        public function get_store_open_notice($default_notice = '')
        {
        }
        /**
         * Get store close notice
         *
         * @param string $default_notice
         *
         * @return string
         */
        public function get_store_close_notice($default_notice = '')
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Setters
        |--------------------------------------------------------------------------
        */
        /**
         * Set enable tnc
         *
         * @param int value
         */
        public function set_enable_tnc($value)
        {
        }
        /**
         * Set store tnc
         *
         * @since 3.0.0
         *
         * @param string
         *
         * @return void
         */
        public function set_store_tnc($value)
        {
        }
        /**
         * Set gravatar
         *
         * @param int value
         */
        public function set_gravatar_id($value)
        {
        }
        /**
         * Set banner
         *
         * @param int value
         */
        public function set_banner_id($value)
        {
        }
        /**
         * Set banner
         *
         * @param int value
         */
        public function set_icon($value)
        {
        }
        /**
         * Set store name
         *
         * @param string
         */
        public function set_store_name($value)
        {
        }
        /**
         * Set phone
         *
         * @param string
         */
        public function set_phone($value)
        {
        }
        /**
         * Set show email
         *
         * @param string
         */
        public function set_show_email($value)
        {
        }
        /**
         * Set show email
         *
         * @param string
         */
        public function set_fb($value)
        {
        }
        /**
         * Set show email
         *
         * @param string
         */
        public function set_gplus($value)
        {
        }
        /**
         * Set show email
         *
         * @param string
         */
        public function set_twitter($value)
        {
        }
        /**
         * Set show email
         *
         * @param string
         */
        public function set_pinterest($value)
        {
        }
        /**
         * Set show email
         *
         * @param string
         */
        public function set_linkedin($value)
        {
        }
        /**
         * Set show email
         *
         * @param string
         */
        public function set_youtube($value)
        {
        }
        /**
         * Set show email
         *
         * @param string
         */
        public function set_instagram($value)
        {
        }
        /**
         * Set flickr
         *
         * @param string
         */
        public function set_flickr($value)
        {
        }
        /**
         * Set paypal email
         *
         * @param string $value
         */
        public function set_paypal_email($value)
        {
        }
        /**
         * Set bank ac name
         *
         * @param string $value
         */
        public function set_bank_ac_name($value)
        {
        }
        /**
         * Set bank ac type
         *
         * @param string $value
         */
        public function set_bank_ac_type($value)
        {
        }
        /**
         * Set bank ac number
         *
         * @param string $value
         */
        public function set_bank_ac_number($value)
        {
        }
        /**
         * Set bank name
         *
         * @param string $value
         */
        public function set_bank_bank_name($value)
        {
        }
        /**
         * Set bank address
         *
         * @param string value
         */
        public function set_bank_bank_addr($value)
        {
        }
        /**
         * Set bank routing number
         *
         * @param string value
         */
        public function set_bank_routing_number($value)
        {
        }
        /**
         * Set bank iban
         *
         * @param string $value
         */
        public function set_bank_iban($value)
        {
        }
        /**
         * Set bank swtif number
         *
         * @param string $value
         */
        public function set_bank_swift($value)
        {
        }
        /**
         * Set street 1
         *
         * @param string $value
         */
        public function set_street_1($value)
        {
        }
        /**
         * Set street 2
         *
         * @param string $value
         */
        public function set_street_2($value)
        {
        }
        /**
         * Set city
         *
         * @param string $value
         */
        public function set_city($value)
        {
        }
        /**
         * Set zip
         *
         * @param string $value
         */
        public function set_zip($value)
        {
        }
        /**
         * Set state
         *
         * @param string $value
         */
        public function set_state($value)
        {
        }
        /**
         * Set country
         *
         * @param string $value
         */
        public function set_country($value)
        {
        }
        /**
         * Sets a prop for a setter method.
         *
         * This stores changes in a special array so we can track what needs saving
         * the the DB later.
         *
         * @since 2.9.11
         *
         * @param string $prop Name of prop to set.
         * @param mixed  $value Value of the prop.
         */
        protected function set_prop($prop, $value)
        {
        }
        /**
         * Get vendor meta data
         *
         * @since 2.9.23
         *
         * @param string $key
         * @param bool $single  Whether to return a single value
         *
         * @return Mix
         */
        public function get_meta($key, $single = false)
        {
        }
        /**
         * Update vendor meta data
         *
         * @since 2.9.11
         *
         * @param string $key
         * @param mixed $value
         *
         * @return void
         */
        public function update_meta($key, $value)
        {
        }
        /**
         * Update meta data
         *
         * @since  2.9.23
         *
         * @return void
         */
        public function update_meta_data()
        {
        }
        /**
         * Sets a prop for a setter method.
         *
         * @since 2.9.11
         *
         * @param string $prop    Name of prop to set.
         * @param string $social Name of social settings to set, fb, twitter
         * @param string $value
         */
        protected function set_social_prop($prop, $social = 'social', $value = '')
        {
        }
        /**
         * Set address props
         *
         * @param string $prop
         * @param string $address
         * @param string value
         */
        protected function set_address_prop($prop, $address = 'address', $value = '')
        {
        }
        /**
         * Set payment props
         *
         * @param string $prop
         * @param string $paypal
         * @param mix value
         */
        protected function set_payment_prop($prop, $paypal = 'paypal', $value = '')
        {
        }
        /**
         * Set store open close props
         *
         * @param string $prop
         * @param array $value
         *
         * @since 2.9.13
         *
         * @return void
         */
        protected function set_store_open_close_prop($prop, $value)
        {
        }
        /**
         * Set store times
         *
         * @param array $data
         *
         * @since 2.9.13
         *
         * @return void
         */
        public function set_store_times(array $data)
        {
        }
        /**
         * Set store times enable
         *
         * @param boolean $value
         *
         * @since 2.9.13
         *
         * @return void
         */
        public function set_store_times_enable($value)
        {
        }
        /**
         * Set store times open notice
         *
         * @param string $value
         *
         * @since 2.9.13
         *
         * @return void
         */
        public function set_store_times_open_notice($value)
        {
        }
        /**
         * Set store times close notice
         *
         * @param string $value
         *
         * @since 2.9.13
         *
         * @return void
         */
        public function set_store_times_close_notice($value)
        {
        }
        /**
         * Merge changes with data and clear.
         *
         * @since 2.9.11
         */
        public function apply_changes()
        {
        }
        /**
         * Save the object
         *
         * @since 2.9.11
         */
        public function save()
        {
        }
        /**
         * Get vendor profile url for admin
         *
         * @since 3.10.2
         *
         * @return string
         */
        public function get_profile_url() : string
        {
        }
    }
}
namespace {
    class Dokan_Vendor extends \WeDevs\Dokan\Vendor\Vendor
    {
    }
}
namespace WeDevs\Dokan\Withdraw {
    /**
     * Withdraw base class
     *
     * @since   2.4
     *
     * @author  wedDevs <info@wedevs.com>
     *
     * @package dokan
     */
    class Manager
    {
        /**
         * Validate approval request
         *
         * @since 3.0.0
         *
         * @param array $args
         *
         * @return bool|\WP_Error
         */
        public function is_valid_approval_request($args)
        {
        }
        /**
         * Validate cancellation request
         *
         * @since 3.0.0
         *
         * @param array $args
         *
         * @return bool|\WP_Error
         */
        public function is_valid_cancellation_request($args)
        {
        }
        /**
         * Update withdraw status
         *
         * @since 2.4
         *
         * @param int    $id
         * @param int    $user_id
         * @param string $status
         *
         * @return void
         */
        public function update_status($id, $user_id, $status)
        {
        }
        /**
         * Insert an withdraw approval request
         *
         * @param array $data
         *
         * @return bool|\WP_Error
         */
        public function insert_withdraw($args = [])
        {
        }
        /**
         * Check if a user has already pending withdraw request
         *
         * @param integer $user_id
         *
         * @return boolean
         */
        public function has_pending_request($user_id)
        {
        }
        /**
         * Get withdraw request of a user
         *
         * @param integer $user_id
         * @param integer $status
         * @param integer $limit
         * @param integer $offset
         *
         * @return Withdraw[]
         */
        public function get_withdraw_requests($user_id = '', $status = 0, $limit = 10, $offset = 0) : array
        {
        }
        /**
         * Get status code by status type
         *
         * @param string
         *
         * @return integer
         */
        public function get_status_code($status)
        {
        }
        /**
         * Get withdraw details by method and user
         *
         * @param string $method
         * @param int    $user_id
         *
         * @return array
         */
        public function get_formatted_details($method, $user_id)
        {
        }
        /**
         * Get withdraw status from code
         *
         * @since 3.0.0
         *
         * @param int $code
         *
         * @return string
         */
        public function get_status_name($code)
        {
        }
        /**
         * Get list of withdraws
         *
         * @since 3.0.0
         *
         * @param  array $args
         *
         * @return array|object
         */
        public function all($args = [])
        {
        }
        /**
         * @since DOKAN_LITE_SINCE
         *
         * @return int|null
         */
        public function get_total_withdraw_count()
        {
        }
        /**
         * Get a single withdraw
         *
         * @since 3.0.0
         *
         * @param 3.0.0 $id
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw|null
         */
        public function get($id)
        {
        }
        /**
         * Create a withdraw request
         *
         * @since 3.0.0
         *
         * @param array $args
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw|\WP_Error
         */
        public function create($args)
        {
        }
        /**
         * Check if a user has sufficient withdraw balance
         *
         * @param integer $user_id
         *
         * @return boolean
         */
        public function has_withdraw_balance($user_id)
        {
        }
        /**
         * Get the system withdraw limit
         *
         * @return integer
         */
        public function get_withdraw_limit()
        {
        }
        /**
         * Get a sellers balance
         *
         * @param integer $user_id
         *
         * @return integer
         */
        public function get_user_balance($user_id)
        {
        }
        /**
         * Export withdraw data
         *
         * @since 3.0.0
         *
         * @param array $args
         *
         * @return \WeDevs\Dokan\Withdraw\Export\Manager
         */
        public function export($args)
        {
        }
        /**
         * Returns users withdraws summary.
         *
         * @since 3.7.10
         *
         * @param int $user_id
         *
         * @return array
         */
        public function get_user_withdraw_summary($user_id = '')
        {
        }
    }
}
namespace {
    class Dokan_Withdraw extends \WeDevs\Dokan\Withdraw\Manager
    {
    }
    /**
     * Lists all depricated classes
     */
    class Dokan_Deprecated_Classes
    {
        /**
         * Initialize
         */
        public function __construct()
        {
        }
    }
    /**
     * WeDevs_Dokan class
     *
     * @class WeDevs_Dokan The class that holds the entire WeDevs_Dokan plugin
     *
     * @property WeDevs\Dokan\Commission    $commission Instance of Commission class
     * @property WeDevs\Dokan\Order\Manager $order Instance of Order Manager class
     * @property WeDevs\Dokan\Product\Manager $product Instance of Order Manager class
     * @property WeDevs\Dokan\Vendor\Manager $vendor Instance of Vendor Manager Class
     * @property WeDevs\Dokan\BackgroundProcess\Manager $bg_process Instance of WeDevs\Dokan\BackgroundProcess\Manager class
     * @property WeDevs\Dokan\Withdraw\Manager $withdraw Instance of WeDevs\Dokan\Withdraw\Manager class
     * @property WeDevs\Dokan\Frontend\Frontend $frontend_manager Instance of \WeDevs\Dokan\Frontend\Frontend class
     * @property WeDevs\Dokan\Registration $registration Instance of WeDevs\Dokan\Registration class
     */
    final class WeDevs_Dokan
    {
        /**
         * Plugin version
         *
         * @var string
         */
        public $version = '3.11.0';
        /**
         * Instance of self
         *
         * @var WeDevs_Dokan
         */
        private static $instance = \null;
        /**
         * Minimum PHP version required
         *
         * @var string
         */
        private $min_php = '7.4';
        /**
         * Holds various class instances
         *
         * @since 2.6.10
         *
         * @var array
         */
        private $container = [];
        /**
         * Databse version key
         *
         * @since 3.0.0
         *
         * @var string
         */
        private $db_version_key = 'dokan_theme_version';
        /**
         * Constructor for the WeDevs_Dokan class
         *
         * Sets up all the appropriate hooks and actions
         * within our plugin.
         */
        private function __construct()
        {
        }
        /**
         * Initializes the WeDevs_Dokan() class
         *
         * Checks for an existing WeDevs_WeDevs_Dokan() instance
         * and if it doesn't find one, create it.
         */
        public static function init()
        {
        }
        /**
         * Magic getter to bypass referencing objects
         *
         * @since 2.6.10
         *
         * @param string $prop
         *
         * @return object Class Instance
         */
        public function __get($prop)
        {
        }
        /**
         * Check if the PHP version is supported
         *
         * @return bool
         */
        public function is_supported_php()
        {
        }
        /**
         * Get the plugin path.
         *
         * @return string
         */
        public function plugin_path()
        {
        }
        /**
         * Get the template path.
         *
         * @return string
         */
        public function template_path()
        {
        }
        /**
         * Placeholder for activation function
         *
         * Nothing being called here yet.
         */
        public function activate()
        {
        }
        /**
         * Flush rewrite rules after dokan is activated or woocommerce is activated
         *
         * @since 3.2.8
         */
        public function flush_rewrite_rules()
        {
        }
        /**
         * Placeholder for deactivation function
         *
         * Nothing being called here yet.
         */
        public function deactivate()
        {
        }
        /**
         * Initialize plugin for localization
         *
         * @uses load_plugin_textdomain()
         */
        public function localization_setup()
        {
        }
        /**
         * Define all constants
         *
         * @return void
         */
        public function define_constants()
        {
        }
        /**
         * Define constant if not already defined
         *
         * @since 2.9.16
         *
         * @param string      $name
         * @param string|bool $value
         *
         * @return void
         */
        private function define($name, $value)
        {
        }
        /**
         * Add High Performance Order Storage Support
         *
         * @since 3.8.0
         *
         * @return void
         */
        public function declare_woocommerce_feature_compatibility()
        {
        }
        /**
         * Load the plugin after WP User Frontend is loaded
         *
         * @return void
         */
        public function init_plugin()
        {
        }
        /**
         * Initialize the actions
         *
         * @return void
         */
        public function init_hooks()
        {
        }
        /**
         * Include all the required files
         *
         * @return void
         */
        public function includes()
        {
        }
        /**
         * Init all the classes
         *
         * @return void
         */
        public function init_classes()
        {
        }
        /**
         * Load table prefix for withdraw and orders table
         *
         * @since 1.0
         *
         * @return void
         */
        public function wpdb_table_shortcuts()
        {
        }
        /**
         * Executed after all plugins are loaded
         *
         * At this point Dokan Pro is loaded
         *
         * @since 2.8.7
         *
         * @return void
         */
        public function after_plugins_loaded()
        {
        }
        /**
         * Register widgets
         *
         * @since 2.8
         *
         * @return void
         */
        public function register_widgets()
        {
        }
        /**
         * Returns if the plugin is in PRO version
         *
         * @since 2.4
         *
         * @return bool
         */
        public function is_pro_exists()
        {
        }
        /**
         * Plugin action links
         *
         * @param array $links
         *
         * @since  2.4
         *
         * @return array
         */
        public function plugin_action_links($links)
        {
        }
        /**
         * Initialize Appsero Tracker
         *
         * @return void
         */
        public function init_appsero_tracker()
        {
        }
        /**
         * Check whether woocommerce is installed and active
         *
         * @since 2.9.16
         *
         * @return bool
         */
        public function has_woocommerce()
        {
        }
        /**
         * Check whether woocommerce is installed
         *
         * @since 3.2.8
         *
         * @return bool
         */
        public function is_woocommerce_installed()
        {
        }
        /**
         * Handles scenerios when WooCommerce is not active
         *
         * @since 2.9.27
         *
         * @return void
         */
        public function woocommerce_not_loaded()
        {
        }
        /**
         * Get Dokan db version key
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_db_version_key()
        {
        }
    }
}
namespace WeDevs\Dokan\Traits {
    /**
     * Object Cache trait.
     *
     * Handles Caching underneath functionalities with the help of this Cacheable trait.
     *
     * @since   3.3.2
     *
     * @package WeDevs\Dokan\Abstracts\Traits
     */
    trait ObjectCache
    {
        /**
         * Add Cache Prefix to key.
         *
         * @since 3.3.2
         *
         * @param string $key
         * @param string $group default: ''
         *
         * @return string processed key
         */
        private static function get_cache_key_with_prefix($key, $group = '')
        {
        }
        /**
         * Get Cache.
         *
         * Example:
         * ```
         * $cache_key   = 'cache_key_name',
         * $cache_group = 'cache_group_name';
         *
         * Cache::get( $cache_key, $cache_group );
         * ```
         *
         * @since 3.3.2
         *
         * @param string $key
         * @param string $group  Optional. Where the cache contents are grouped. Default empty.
         * @param bool   $forced Optional. Whether to force an update of the local cache from the persistent cache. Default false.
         *
         * @return mixed|false
         */
        public static function get($key, $group = '', $forced = false)
        {
        }
        /**
         * Set Cache.
         *
         * Update the cache. We've added some defaults to set the cache.
         * Like, We set default expiry time, cache group to remove some redundant assign of those data.
         *
         * Example:
         * ```
         * $cache_key    = 'cache_key_name',
         * $cache_group  = 'cache_group_name';
         * $cache_result = Cache::get( $cache_key, $cache_group );
         *
         * if ( false === $cache_result ) {
         *      $cache_result = []; // Calculate & set to to $cache_result
         *      Cache::set( $cache_key, $cache_result, $cache_group );
         * }
         * ```
         *
         * @since 3.3.2
         *
         * @param string $key
         * @param mixed  $value
         * @param string $group  default: ``;                    eg: `products`, `employees`
         * @param int    $expire default: `WEEK_IN_SECONDS * 2`; eg: 120, DAY_IN_SECONDS
         *
         * @return bool
         */
        public static function set($key, $value, $group = '', $expire = WEEK_IN_SECONDS * 2)
        {
        }
        /**
         * Delete Cache by key and group.
         *
         * Example:
         * ```
         * Cache::delete( 'cache_key_name', 'cache_group_name' );
         * ```
         *
         * @since 3.3.2
         *
         * @param string $key   The key under which to store the value.
         * @param string $group The group value appended to the $key.
         * @param int    $time  The amount of time the server will wait to delete the item in seconds.
         *
         * @return bool
         */
        public static function delete($key, $group = '', $time = 0)
        {
        }
        /**
         * Invalidate cache group at once by group name.
         *
         * Example:
         * ```
         * Cache::invalidate_group( 'group_name' );
         * ```
         *
         * @since 3.3.2
         *
         * @param string $group Group of caches to clear.
         *
         * @return bool
         */
        public static function invalidate_group($group)
        {
        }
        /**
         * Get Cache Key and Group with Prefix added.
         *
         * @since 3.3.2
         *
         * @param string $key
         * @param string $group
         *
         * @return array
         */
        private static function get_key_and_group($key, $group)
        {
        }
    }
    /**
     * Transient trait.
     *
     * Handles Transient underneath functionalities with the help of this TransientTrait trait.
     *
     * @since 3.3.2
     *
     * @package WeDevs\Dokan\Abstracts\Traits
     */
    trait TransientCache
    {
        /**
         * Get transient version.
         *
         * When using transients with unpredictable names, e.g. those containing an md5
         * hash in the name, we need a way to invalidate them all at once.
         *
         * With external cache however, this isn't possible. Instead, this function is used
         * to append a unique string (based on time()) to each transient. When transients
         * are invalidated, the transient version will increment and data will be regenerated
         *
         * @since 3.3.2
         *
         * @param  string $group   Name for the group of transients we need to invalidate.
         * @param  bool   $refresh true to force a new version.
         *
         * @return string transient version based on microtime().
         */
        private static function get_transient_version($group, $refresh = false)
        {
        }
        /**
         * Add Cache Prefix to key.
         *
         * @since 3.3.2
         *
         * @param string $key
         * @param string $group; default: ''
         *
         * @return string processed key
         */
        private static function get_formatted_transient_key($key, $group = '')
        {
        }
        /**
         * Get Transient value from a key.
         *
         * It applies for oth from Object & Normal data
         * If needs only key value, just pass `$transient_key`
         * If the transient value is an object, and need to get the params of that object
         * then pass the second args `$param`.
         *
         * Examples:
         *
         * Get transient value for a normal key.
         * ```
         * Cache::get_transient( 'transient_key' ); // returns only `transient_key`'s value
         * ```
         *
         * Get transient value for a group.
         * ```
         * Cache::get_transient( 'transient_key', 'group_name' );
         * ```
         *
         * @since 3.3.2
         *
         * @param string $key    eg: seller_data_[id]
         * @param string $group  eg: null, seller_earnings
         *
         * @return mixed|false   Transient value or false
         */
        public static function get_transient($key, $group = '')
        {
        }
        /**
         * Set Transient value for a key.
         *
         * @since 3.3.2
         *
         * @param string $key           eg: seller_data_[id]
         * @param string $value         eg: 6000, ['earning' => 1]
         * @param string $group         eg: seller_earnings
         * @param int    $expiration    default: 1 Week => WEEK_IN_SECONDS
         *
         * @return bool True if the value was set, false otherwise
         */
        public static function set_transient($key, $value, $group = '', $expiration = WEEK_IN_SECONDS)
        {
        }
        /**
         * Delete transient.
         *
         * @since 3.3.2
         *
         * @param string $key    eg: seller_data_[id]
         * @param string $group  eg: seller_earnings
         *
         * @return bool          True if the transient was deleted otherwise false.
         */
        public static function delete_transient($key, $group = '')
        {
        }
        /**
         * Invalidate transient group at once by group name.
         *
         * Example:
         * ```
         * Cache::invalidate_transient_group( 'group_name' );
         * ```
         *
         * @since 3.3.2
         *
         * @param string $group Group of transients data to clear.
         *
         * @return string
         */
        public static function invalidate_transient_group($group)
        {
        }
    }
}
namespace WeDevs\Dokan\Abstracts {
    /**
     * Dokan Cache class.
     *
     * Manage all of the caches of your WordPress plugin and handles it beautifully.
     *
     * @since 3.3.2
     *
     * @package WeDevs\Dokan\Abstracts\Cache
     */
    abstract class DokanCache
    {
        use \WeDevs\Dokan\Traits\ObjectCache, \WeDevs\Dokan\Traits\TransientCache;
        /**
         * Get Cache Group Prefix.
         *
         * @since 3.3.2
         *
         * @return string
         */
        protected static abstract function get_cache_group_prefix();
        /**
         * Get Cache Key Prefix.
         *
         * @since 3.3.2
         *
         * @return string
         */
        protected static abstract function get_cache_prefix();
        /**
         * Add Cache Group Prefix to group.
         *
         * @since 3.3.2
         *
         * @param string $group
         *
         * @return string
         */
        private static function get_cache_group_with_prefix($group)
        {
        }
        /**
         * Get Microtime value as prefix.
         *
         * This will Replace microtime() value's dot => '.' and space => ' '
         * characters with underscore => '_' character
         *
         * @since 3.3.2
         *
         * @return string
         */
        private static function get_time_prefix()
        {
        }
    }
    abstract class DokanModel
    {
        /**
         * Set model data
         *
         * @since 3.0.0
         *
         * @param array $data
         */
        protected abstract function set_data($data);
        /**
         * Get model data
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_data()
        {
        }
        /**
         * Save model data
         *
         * @since 3.0.0
         *
         * @return \WeDevs\Dokan\Abstracts\Model
         */
        public abstract function save();
        /**
         * Create a model
         *
         * @since 3.0.0
         *
         * @return \WeDevs\Dokan\Abstracts\Model
         */
        protected abstract function create();
        /**
         * Update a model
         *
         * @since 3.0.0
         *
         * @return \WeDevs\Dokan\Abstracts\Model
         */
        protected abstract function update();
        /**
         * Delete a model
         *
         * @since 3.0.0
         *
         * @return \WeDevs\Dokan\Abstracts\Model
         */
        public abstract function delete();
    }
    /**
     * Promotion class
     *
     * For displaying AI base promotion in admin panel
     *
     * @since   2.9.0
     *
     * @package dokan
     */
    abstract class DokanPromotion
    {
        /**
         * Time Interval displaying between two promo
         *
         * @var integer
         */
        public $time_interval = 60 * 60 * 24 * 7;
        /**
         * option key for promo
         *
         * @var string
         */
        public $promo_option_key = '_dokan_displayed_promos';
        /**
         * Load autometically when class initiate
         *
         * @since 2.9.0
         */
        public function __construct()
        {
        }
        /**
         * Get data
         *
         * @since 1.0.0
         *
         * @return array
         */
        public abstract function get_promotion_data();
        /**
         * Module promotion notices
         *
         * @since 2.9.0
         *
         * @return void
         */
        public function show_promotions()
        {
        }
        /**
         * Dissmiss prmo notice according
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function dismiss_upgrade_promo()
        {
        }
        /**
         * Get latest prmo
         *
         * @since 1.0.0
         *
         * @return array
         */
        public function get_latest_promo()
        {
        }
        /**
         * Sort all promotions depends on priority key
         *
         * @param array $a
         * @param array $b
         *
         * @return integer
         */
        public function sort_by_priority($a, $b)
        {
        }
    }
    abstract class DokanShortcode
    {
        protected $shortcode = '';
        public function __construct()
        {
        }
        public function get_shortcode()
        {
        }
        public abstract function render_shortcode($atts);
    }
    abstract class DokanUpgrader
    {
        /**
         * Execute upgrader class methods
         *
         * This method will execute every method found in child
         * upgrader class dynamically. Keep in mind that methods
         * should be public static function.
         *
         * @since 3.0.0
         *
         * @param string $required_lite_version Required in case of Pro upgraders
         *
         * @return void
         */
        public static function run($required_lite_version = null)
        {
        }
        /**
         * Update the DB version
         *
         * Upgrader files should follow naming convention
         * as V_XX_XX_XX.php where Xs are number following
         * semvar convention. For example if you have a upgrader
         * for version 1.23.40, the the filename should be
         * V_1_23_40.php.
         *
         * @since 3.0.0
         *
         * @return void
         */
        public static function update_db_version()
        {
        }
        /**
         * Get db versioning key
         *
         * This method should be overriden in Dokan Pro
         *
         * @since 3.0.0
         *
         * @return string
         */
        public static function get_db_version_key()
        {
        }
    }
    /**
     * Product status changer abstract class
     *
     * @since 3.7.18
     */
    abstract class ProductStatusChanger
    {
        /**
         * Vendor id
         *
         * @since 3.7.18
         *
         * @var int $vendor_id
         */
        private $vendor_id;
        /**
         * Current page
         *
         * @since 3.7.18
         *
         * @var int $page
         */
        private $page = 1;
        /**
         * Number of products to process per batch
         *
         * @string 3.7.18
         *
         * @var int $per_page
         */
        private $per_page = 100;
        /**
         * Task type
         *
         * @string 3.7.18
         *
         * @var string $task_type change_status|revert
         */
        private $task_type;
        /**
         * Class constructor
         *
         * @since 3.7.18
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Set vendor id
         *
         * @since 3.7.18
         *
         * @param int $vendor_id
         *
         * @return void
         */
        public function set_vendor_id($vendor_id)
        {
        }
        /**
         * Set task type
         *
         * @since 3.7.18
         *
         * @param string $task_type change_status|revert
         *
         * @return void
         */
        public function set_task_type($task_type)
        {
        }
        /**
         * Set current page
         *
         * @since 3.7.18
         *
         * @param int $page
         *
         * @return void
         */
        public function set_page($page)
        {
        }
        /**
         * Set number of products to process per batch
         *
         * @since 3.7.18
         *
         * @param int $per_page
         *
         * @return void
         */
        public function set_per_page($per_page)
        {
        }
        /**
         * Get vendor id
         *
         * @since 3.7.18
         *
         * @return int
         */
        public function get_vendor_id()
        {
        }
        /**
         * Get task type
         *
         * @since 3.7.18
         *
         * @return string
         */
        public function get_task_type()
        {
        }
        /**
         * Get current page
         *
         * @since 3.7.18
         *
         * @return int
         */
        public function get_current_page()
        {
        }
        /**
         * Increment current page
         *
         * @since 3.7.18
         *
         * @return void
         */
        protected function increment_current_page()
        {
        }
        /**
         * Get number of products to process per batch
         *
         * @since 3.7.18
         *
         * @return int
         */
        public function get_per_page()
        {
        }
        /**
         * Reset properties
         *
         * @since 3.7.18
         *
         * @return void
         */
        public function reset()
        {
        }
        /**
         * Get products to process
         *
         * @since 3.7.18
         *
         * @return int[]
         */
        public abstract function get_products();
        /**
         * Add products to queue
         *
         * @since 3.7.18
         *
         * @param string      $task_type change_status|revert
         * @param string|null $status
         *
         * @return void
         */
        public function add_to_queue($task_type = 'change_status', $status = null)
        {
        }
        /**
         * Process background task
         *
         * @since 3.7.18
         *
         * @param array $args
         *
         * @return void
         */
        public function process_background_task($args)
        {
        }
        /**
         * Clear product cache
         *
         * @since 3.7.18
         *
         * @param string[] $args
         *
         * @return void
         */
        public function clear_product_cache($args)
        {
        }
        /**
         * Change product status
         *
         * @since 3.7.18
         *
         * @param int         $product_id
         * @param string|null $status
         *
         * @return void
         */
        private function change_status($product_id, $status)
        {
        }
        /**
         * Revert product status
         *
         * @since 3.7.18
         *
         * @param int $product_id
         *
         * @return void
         */
        private function revert($product_id)
        {
        }
    }
}
namespace WeDevs\Dokan\Admin {
    /**
     * WordPress settings API For Dokan Admin Settings class
     *
     * @author Tareq Hasan
     */
    class AdminBar
    {
        /**
         * Class constructor
         *
         * Sets up all the appropriate hooks and actions
         * within our plugin.
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Add Menu in Dashboard Top bar
         *
         * @return void
         */
        public function dokan_admin_toolbar()
        {
        }
        /**
         * Show visit vendor dashboard
         *
         * @param WP_Admin_Bar $wp_admin_bar
         *
         * @return void
         */
        public function visit_dashboard_menu($wp_admin_bar)
        {
        }
        /**
         * Get admin menus data for dokan.
         *
         * @since 3.2.15
         *
         * @return array
         */
        public function get_dokan_admin_bar_menus()
        {
        }
    }
    /**
     * Admin Hooks
     *
     * @since   3.0.0
     *
     * @package dokan
     */
    class Hooks
    {
        /**
         * Load autometically when class initiate
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Send notification to the seller once a product is published from pending
         *
         * @param WP_Post $post
         *
         * @return void
         */
        public function send_notification_on_product_publish($post)
        {
        }
        /**
         * Remove default author metabox and added new one for dokan seller
         *
         * @since  1.0.0
         *
         * @return void
         */
        public function add_seller_meta_box()
        {
        }
        /**
         * Display form field with list of authors.
         *
         * @since 2.5.3
         *
         * @param object $post
         */
        public static function seller_meta_box_content($post)
        {
        }
        /**
         * Ajax method to search vendors
         *
         * @since 3.7.1
         *
         * @return void
         */
        public function search_vendors()
        {
        }
        /**
         * Override product vendor ID from admin panel
         *
         * @since 2.6.2
         *
         * @return void
         */
        public function override_product_author_by_admin($product_id, $post)
        {
        }
        /**
         * Assign vendor for deleted post types
         *
         * @param array   $post_types
         * @param integer $user_id
         *
         * @return array
         */
        public function add_wc_post_types_to_delete_user($post_types, $user_id)
        {
        }
        /**
         * Dokan update pages
         *
         * @param array $value
         * @param array $name
         *
         * @return array
         */
        public function update_pages($value, $name)
        {
        }
    }
    class Menu
    {
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Add Dokan admin menu
         *
         * @since 1.0.0
         * @since 3.0.0 Moved to Menu class
         *
         * @return void
         */
        public function add_admin_menu()
        {
        }
        /**
         * Dashboard scripts and styles
         *
         * @since 1.0
         * @since 3.0.0 Moved to Menu class
         *
         * @return void
         */
        public function dashboard_script()
        {
        }
        /**
         * Load Dashboard Template
         *
         * @since 1.0
         * @since 3.0.0 Moved to Menu class
         *
         * @return void
         */
        public function dashboard()
        {
        }
    }
}
namespace WeDevs\Dokan\Admin\Notices {
    /**
     * Dokan Admin notices helper methods
     *
     * @sience 3.3.3
     */
    class Helper
    {
        /**
         * This method will display notices only under Dokan menu and all of its sub-menu pages
         *
         * @since 3.3.3
         *
         * @return array | void
         */
        public static function dokan_get_admin_notices()
        {
        }
        /**
         * Dokan promotional notices
         *
         * @since 3.3.3
         *
         * @return array
         */
        public static function dokan_get_promo_notices()
        {
        }
        /**
         * Check if dokan pro-license is active
         *
         * @since 3.9.3
         *
         * @return bool
         */
        public static function is_pro_license_active() : bool
        {
        }
        /**
         * Check has new version in dokan lite and pro
         *
         * @since 3.3.3
         *
         * @return bool
         */
        public static function dokan_has_new_version()
        {
        }
        /**
         * Sort all notices depends on priority key
         *
         * @param array $current_notice
         * @param array $next_notice
         *
         * @since 3.3.3
         *
         * @return integer
         */
        private static function dokan_sort_notices_by_priority($current_notice, $next_notice)
        {
        }
    }
    /**
     * Limited time promotion class
     *
     * For displaying limited time promotion in admin panel
     *
     * @since 3.0.14
     *
     * @package dokan
     */
    class LimitedTimePromotion
    {
        /**
         * Option key for limited time promo
         *
         * @var string
         */
        public $promo_option_key = '_dokan_limited_time_promo';
        /**
         * LimitedTimePromotion constructor
         */
        public function __construct()
        {
        }
        /**
         * Render promotional notices via vue.js
         *
         * @return void
         */
        public function render_promo_notices_html()
        {
        }
        /**
         * Dismisses limited time promo notice
         */
        public function dismiss_limited_time_promo()
        {
        }
    }
}
namespace WeDevs\Dokan\Traits {
    trait ChainableContainer
    {
        /**
         * Contains chainable class instances
         *
         * @var array
         */
        protected $container = [];
        /**
         * Cloning is forbidden.
         *
         * @since 3.7.21
         */
        public function __clone()
        {
        }
        /**
         * Unserializing instances of this class is forbidden.
         *
         * @since 3.7.21
         */
        public function __wakeup()
        {
        }
        /**
         * Magic getter to get chainable container instance
         *
         * @since 3.0.0
         *
         * @param string $prop
         *
         * @return mixed
         */
        public function __get($prop)
        {
        }
    }
}
namespace WeDevs\Dokan\Admin\Notices {
    /**
     * Dokan Admin notices handler class
     *
     * @since 3.3.3
     */
    class Manager
    {
        use \WeDevs\Dokan\Traits\ChainableContainer;
        /**
         * Class constructor
         *
         * @since 3.3.3
         */
        public function __construct()
        {
        }
        /**
         * Register all notices classes to chainable container
         *
         * @since 3.3.3
         *
         * @return void
         */
        private function init_classes()
        {
        }
        /**
         * Handle notices that has no ajax action
         *
         *  @since 3.3.3
         *
         * @return void
         */
        private function init_hooks()
        {
        }
        /**
         * Load admin notices style and styles
         *
         * @since 3.3.6
         *
         * @return void
         */
        public function load_dokan_admin_notices_styles()
        {
        }
        /**
         * Render dokan global admin notices via Vue.js
         *
         * @since 3.3.3
         *
         * @return void
         */
        public function render_global_admin_notices_html()
        {
        }
        /**
         * Missing WooCommerce notice
         *
         * @since 2.9.16
         *
         * @return void
         */
        public function render_missing_woocommerce_notice()
        {
        }
        /**
         * Display permalink format not working for Dokan notice
         *
         * @since 3.3.3
         *
         * @param array $notices
         *
         * @return array
         */
        public function show_permalink_setting_notice($notices)
        {
        }
        /**
         * Display single page product page create notice.
         *
         * @since 3.8.2
         *
         * @param array $notices
         *
         * @return array
         */
        public function show_one_step_product_add_notice($notices)
        {
        }
        /**
         * Dismisses one-step product create notice.
         *
         * @since 3.8.2
         *
         * @return void
         */
        public function dismiss_dokan_one_step_product_notice()
        {
        }
    }
    /**
     * Review notice class.
     *
     * For displaying asking for review notice in admin panel.
     *
     * @since 3.3.1
     *
     * @package dokan
     */
    class PluginReview
    {
        /**
         * ReviewNotice constructor.
         *
         * @since 3.3.1
         */
        public function __construct()
        {
        }
        /**
         * Show ask for review notice.
         *
         * @since 3.3.1
         *
         * @param array $notices
         *
         * @return array
         */
        public function show_ask_for_review_notice($notices)
        {
        }
        /**
         * Reveiw notice action ajax handler.
         *
         * @since 3.3.1
         *
         * @return void
         */
        public function review_notice_action_ajax_handler()
        {
        }
    }
    /**
     * Setup wizard notice handler class
     *
     * @since 3.3.3
     */
    class SetupWizard
    {
        /**
         * Class constructor
         *
         * @since 3.3.3
         */
        public function __construct()
        {
        }
        /**
         * Render run admin setup wizard notice
         *
         * @since 2.9.27
         *
         * @param array $notices
         *
         * @return array
         */
        public function render_run_admin_setup_wizard_notice($notices)
        {
        }
        /**
         * Dismisses admin setup wizard notice
         *
         * @since 3.3.3
         *
         * @return void
         */
        public function dismiss_admin_setup_wizard_notice()
        {
        }
    }
    /**
     * What's new notice handler class
     *
     * @since 3.3.3
     */
    class WhatsNew
    {
        /**
         * Class Constructor
         *
         * @since 3.3.3
         */
        public function __construct()
        {
        }
        /**
         * Show update notice
         *
         * @since 3.3.3
         *
         * @param array $notices
         *
         * @return array
         */
        public function show_whats_new_notice($notices)
        {
        }
        /**
         * Dismiss new notice
         *
         * @since 3.3.3
         *
         * @return void
         */
        public function dismiss_new_notice()
        {
        }
    }
}
namespace WeDevs\Dokan\Admin {
    /**
     * Dokan_Admin_Pointers Class.
     */
    class Pointers
    {
        /**
         * Hold current screen ID
         *
         * @var integer
         */
        private $screen_id;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Dismiss a screen pointers after clicking dismiss
         *
         * @param String $screen
         *
         * @return void
         */
        public function dismiss_screen($screen = false)
        {
        }
        /**
         * Check if pointers for screen is dismissed
         *
         * @param String $screen
         *
         * @return bool
         */
        public function is_dismissed($screen)
        {
        }
        /**
         * Setup pointers for screen.
         */
        public function setup_pointers_for_screen()
        {
        }
        /**
         *  Render pointers on Dashboard Page
         */
        public function dashboard_tutorial()
        {
        }
        /**
         * Renders Settings tutorial pointers
         *
         * @return void
         */
        public function settings_tutorial()
        {
        }
        /**
         * Enqueue pointers and add script to page.
         * @param array $pointers
         */
        public function enqueue_pointers($pointers)
        {
        }
    }
    /**
    * Promotion class
    *
    * For displaying AI base add on admin panel
    */
    class Promotion extends \WeDevs\Dokan\Abstracts\DokanPromotion
    {
        /**
         * Time interval for displaying promo
         *
         * @var integer
         */
        public $time_interval = 60 * 60 * 24 * 7;
        /**
         * Promo option key
         *
         * @var string
         */
        public $promo_option_key = '_dokan_free_upgrade_promo';
        /**
         * Get prmotion data
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function get_promotion_data()
        {
        }
    }
}
namespace WeDevs\Dokan\Traits {
    trait AjaxResponseError
    {
        /**
         * Send Ajax error response
         *
         * @since 3.0.0
         *
         * @param \Exception $e
         * @param string     $default_message
         *
         * @return void
         */
        protected static function send_response_error(\Exception $e, $default_message = '')
        {
        }
    }
}
namespace WeDevs\Dokan\Admin {
    /**
     * Admin Settings Class
     *
     * @since   3.0.0
     *
     * @package dokan
     */
    class Settings
    {
        use \WeDevs\Dokan\Traits\AjaxResponseError;
        /**
         * Load automatically when class initiate
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Set unselected Withdraw Methods
         *
         * @since 3.6.0
         *
         * @param mixed $option_name
         * @param mixed $option_value
         *
         * @return void|mixed $option_value
         */
        public function set_withdraw_limit_gateways($option_value, $option_name)
        {
        }
        /**
         * Format price values for price settings
         *
         * @since 1.0.0
         *
         * @param $option_name
         * @param $option_values
         *
         * @return void
         */
        public function format_price_values($option_values, $option_name)
        {
        }
        /**
         * Get settings values
         *
         * @since 2.8.2
         *
         * @return void
         */
        public function get_settings_value()
        {
        }
        /**
         * Save settings value
         *
         * @since 2.8.2
         *
         * @return void
         */
        public function save_settings_value()
        {
        }
        /**
         * Sanitize callback for Settings API
         *
         * @param        $options
         * @param string $context
         *
         * @return mixed
         */
        public function sanitize_options($options, $context = 'read')
        {
        }
        /**
         * Get sanitization callback for given option slug
         *
         * @param string $slug option slug
         * @param string $context
         *
         * @return mixed string or bool false
         */
        public function get_sanitize_callback($slug = '', $context = 'read')
        {
        }
        /**
         * Load settings sections and fields
         *
         * @since 2.8.2
         *
         * @param $data
         *
         * @return void
         */
        public function settings_localize_data($data)
        {
        }
        /**
         * Get Post Type array
         *
         * @since 1.0
         *
         * @param string $post_type
         *
         * @return array
         */
        public function get_post_type($post_type)
        {
        }
        /**
         * Get all settings Sections
         *
         * @since 1.0.0
         *
         * @return array
         */
        public function get_settings_sections()
        {
        }
        /**
         * Returns all the settings fields
         *
         * @since 1.0.0
         *
         * @return array settings fields
         */
        public function get_settings_fields()
        {
        }
        /**
         * Add settings after specific option
         *
         * @since 2.9.11
         *
         * @param string $section             Name of the section
         * @param string $option              Name of the option after which we wish to add new settings
         * @param array  $additional_settings New settings/options
         * @param array  $settings_fields     Current settings
         *
         * @return array
         */
        public function add_settings_after($settings_fields, $section, $option, $additional_settings)
        {
        }
        /**
         * Add settings nonce to localized vars
         *
         * @since DOKNA_LITE_SINCE
         *
         * @param array $vars
         *
         * @return array
         */
        public function add_admin_settings_nonce($vars)
        {
        }
        /**
         * Get refreshed options for a admin setting
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return void
         */
        public function refresh_admin_settings_field_options()
        {
        }
        /**
         * Validates admin withdraw limit settings
         *
         * @since 3.2.15
         *
         * @param mixed $option_name
         * @param mixed $option_value
         *
         * @return void|mixed $option_value
         */
        public function set_withdraw_limit_value_validation($option_name, $option_value)
        {
        }
        /**
         * Dokan data clear setting
         *
         * @since 3.2.15
         *
         * @return array $settings_fields
         */
        public function add_dokan_data_clear_setting($settings_fields)
        {
        }
    }
    class SetupWizardNoWC extends \WeDevs\Dokan\Admin\SetupWizard
    {
        /**
         * Set wizard steps
         *
         * @since 2.9.27
         *
         * @return void
         */
        protected function set_steps()
        {
        }
        /**
         * Should show any recommended step
         *
         * @since 2.9.27
         *
         * @return bool
         */
        protected function should_show_recommended_step()
        {
        }
        /**
         * Enqueue wizard scripts
         *
         * @since 2.9.27
         *
         * @return void
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Wizard templates
         *
         * @since 2.9.27
         */
        protected function set_setup_wizard_template()
        {
        }
        /**
         * Setup wizard main content
         *
         * @since 2.9.27
         *
         * @return void
         */
        public function setup_wizard_content()
        {
        }
        /**
         * Setup wizard footer
         *
         * @since 2.9.27
         *
         * @return void
         */
        public function setup_wizard_footer()
        {
        }
        /**
         * Introduction page
         *
         * @since 2.9.27
         *
         * @return void
         */
        public function step_introduction()
        {
        }
        /**
         * Install WooCommerce and redirect to store setup step
         *
         * @since 2.9.27
         *
         * @return void
         */
        public function install_woocommerce()
        {
        }
        /**
         * Get WooCommerce Setup wizard
         *
         * @since 2.9.27
         *
         * @param array $steps
         *
         * @return \WeDevs\Dokan\Admin\SetupWizardWCAdmin
         */
        protected static function get_wc_setup_wizard($steps = [])
        {
        }
        /**
         * Add WooCommerce steps in Dokan admin setup wizard
         *
         * @since 2.9.27
         *
         * @param array $steps
         */
        public static function add_wc_steps_to_wizard($steps)
        {
        }
        /**
         * Add WC localized scripts
         *
         * @since 2.9.27
         *
         * @return void
         */
        public static function enqueue_wc_localized_scripts()
        {
        }
        /**
         * Add WC fields to Store setup form
         *
         * @since 2.9.27
         *
         * @return void
         */
        public static function add_wc_html_step_start()
        {
        }
        /**
         * Save WC data in store setup step
         *
         * @since 2.9.27
         *
         * @return void
         */
        public static function save_wc_store_setup_data()
        {
        }
        /**
         * WC payment setup step form
         *
         * @since 2.9.27
         *
         * @return void
         */
        public static function wc_setup_payment()
        {
        }
        /**
         * WC payment step post data handler
         *
         * @since 2.9.27
         *
         * @param SetupWizard $dokan_admin_setup_wizard
         *
         * @return void
         */
        public static function wc_setup_payment_save($dokan_admin_setup_wizard)
        {
        }
        /**
         * WC shipping setup step form
         *
         * @since 2.9.27
         *
         * @return void
         */
        public static function wc_setup_shipping()
        {
        }
        /**
         * WC shipping step post data handler
         *
         * @since 2.9.27
         *
         * @param SetupWizard $dokan_admin_setup_wizard
         *
         * @return void
         */
        public static function wc_setup_shipping_save($dokan_admin_setup_wizard)
        {
        }
    }
    class SetupWizardWCAdmin extends \WC_Admin_Setup_Wizard
    {
        /**
         * Current step
         *
         * @since 2.9.27
         *
         * @var string
         */
        private $step = '';
        /**
         * Steps for the setup wizard
         *
         * @since 2.9.27
         *
         * @var array
         */
        private $steps = array();
        /**
         * Class constuctor
         *
         * @since 2.9.27
         *
         * @param array $steps
         *
         * @return void
         */
        public function __construct($steps = array())
        {
        }
        /**
         * Set current step
         *
         * @since 2.9.27
         *
         * @param string $step
         */
        public function set_step($step)
        {
        }
        /**
         * WooCommerce Shipping setup step
         *
         * @see WC_Admin_Setup_Wizard::wc_setup_shipping Override the input/checkbox only
         *
         * @since 2.9.27
         *
         * @return void
         */
        public function wc_setup_shipping()
        {
        }
        /**
         * Display service item in list.
         *
         * @see WC_Admin_Setup_Wizard::display_service_item Override input/checkbox only
         *
         * @param int   $item_id Item ID.
         * @param array $item_info Item info array.
         *
         * @return void
         */
        public function display_service_item($item_id, $item_info)
        {
        }
        /**
         * Get the URL for the next step's screen.
         *
         * @see WC_Admin_Setup_Wizard::get_next_step_link Without the override, $this in parent class
         *                                                will refer to parent class object
         *
         * @since 2.9.27
         *
         * @param string $step  slug (default: current step).
         * @return string       URL for next step if a next step exists.
         *                      Admin URL if it's the last step.
         *                      Empty string on failure.
         *
         * @return void
         */
        public function get_next_step_link($step = '')
        {
        }
    }
    /**
     * User profile related tasks for wp-admin
     *
     * @package Dokan
     */
    class UserProfile
    {
        public function __construct()
        {
        }
        /**
         * Enqueue Script in admin profile
         *
         * @param  string $page
         *
         * @return void
         */
        public function enqueue_scripts($page)
        {
        }
        /**
         * Add fields to user profile
         *
         * @param \WP_User $user
         *
         * @return void|false
         */
        public function add_meta_fields($user)
        {
        }
        /**
         * Save user data
         *
         * @param int $user_id
         *
         * @return void
         */
        public function save_meta_fields($user_id)
        {
        }
    }
    /**
     * WithdrawLogExporter for Log Export.
     *
     * @since 3.8.3
     *
     * @package dokan
     */
    class WithdrawLogExporter extends \WC_CSV_Batch_Exporter
    {
        /**
         * Type of export used in filter names.
         *
         * @since 3.8.3
         *
         * @var string
         */
        protected $export_type = 'withdraw';
        /**
         * Filename to export to.
         *
         * @since 3.8.3
         *
         * @var string
         */
        protected $filename = 'dokan-withdraw-log-export.csv';
        /**
         * Items to export.
         *
         * @since 3.8.3
         *
         * @var array
         */
        protected $items = [];
        /**
         * Total rows to export.
         *
         * @since 3.8.3
         *
         * @var int
         */
        protected $total_rows = 0;
        /**
         * Decimal places.
         *
         * @since 3.8.3
         *
         * @var int
         */
        protected $decimal_places = 2;
        /**
         * Get column names.
         *
         * @since 3.8.3
         *
         * @return array
         */
        public function get_column_names()
        {
        }
        /**
         * Set items for export.
         *
         * @since 3.8.3
         *
         * @param array $items
         */
        public function set_items($items = [])
        {
        }
        /**
         * Set total rows.
         *
         * @since 3.8.3
         *
         * @param int $total_rows
         */
        public function set_total_rows($total_rows)
        {
        }
        /**
         * Return an array of columns to export.
         *
         * @since 3.8.3
         *
         * @return array
         */
        public function get_default_column_names()
        {
        }
        /**
         * Prepare formatted data to export.
         *
         * @since 3.8.3
         *
         * @return void
         */
        public function prepare_data_to_export()
        {
        }
        /**
         * Take a withdraw item and generate row data from it for export.
         *
         * @since 3.8.3
         *
         * @param $withdraw_item
         *
         * @return array
         */
        protected function generate_row_data($withdraw_item)
        {
        }
        /**
         * Get value from withdraw item by key.
         *
         * @since 3.8.3
         *
         * @param $withdraw_item
         * @param $key
         *
         * @return mixed
         */
        protected function get_column_value($withdraw_item, $key)
        {
        }
        /**
         * Get total % complete.
         *
         * @since 3.8.3
         *
         * @return int
         */
        public function get_percent_complete()
        {
        }
    }
}
namespace WeDevs\Dokan {
    /**
     * Ajax handler for Dokan
     */
    class Ajax
    {
        /**
         * Class constructor
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Create product from popup submission
         *
         * @since  2.5.0
         *
         * @return void
         */
        public function create_product()
        {
        }
        /**
         * Check the availability of shop name.
         *
         * @return void
         */
        public function shop_url_check()
        {
        }
        /**
         * Mark a order as complete
         *
         * Fires from seller dashboard in frontend
         */
        public function complete_order()
        {
        }
        /**
         * Mark a order as processing
         *
         * Fires from frontend seller dashboard
         */
        public function process_order()
        {
        }
        /**
         * Grant download permissions via ajax function
         *
         * @return void
         */
        public function grant_access_to_download()
        {
        }
        /**
         * Update a order status
         *
         * @return void
         */
        public function change_order_status()
        {
        }
        /**
         * Seller store page email contact form handler
         *
         * Catches the form submission from store page
         */
        public function contact_seller()
        {
        }
        /**
         * Rovoke file download access for customer
         *
         * @return void
         */
        public function revoke_access_to_download()
        {
        }
        /**
         * Add order note via ajax
         */
        public function add_order_note()
        {
        }
        /**
         * Add shipping tracking info via ajax
         */
        public function add_shipping_tracking_info()
        {
        }
        /**
         * Delete order note via ajax
         */
        public function delete_order_note()
        {
        }
        /**
         * Search seller listing
         *
         * @return void
         */
        public function seller_listing_search()
        {
        }
        /**
         * Gets attachment uploaded by Media Manager, crops it, then saves it as a
         * new object. Returns JSON-encoded object details.
         *
         * @since 2.5
         *
         * @return void
         */
        public function crop_store_banner()
        {
        }
        /**
         * Search product using term
         *
         * @since 2.6.8
         *
         * @return void
         */
        public function json_search_product()
        {
        }
        /**
         * Search product tags
         *
         * @since 3.0.5
         *
         * @return array
         */
        public function dokan_json_search_products_tags()
        {
        }
        /**
         * Search customer
         *
         * @since 2.8.3
         *
         * @return array
         */
        public function dokan_json_search_vendor_customers()
        {
        }
        /**
         * Calculate width and height based on what the currently selected theme supports.
         *
         * @since 2.5
         *
         * @param array $dimensions
         *
         * @return array dst_height and dst_width of header image
         */
        public final function get_header_dimensions($dimensions)
        {
        }
        /**
         * Create an attachment 'object'.
         *
         * @since 2.5
         *
         * @param string $cropped              cropped image URL
         * @param int    $parent_attachment_id attachment ID of parent image
         *
         * @return array attachment object
         */
        public final function create_attachment_object($cropped, $parent_attachment_id)
        {
        }
        /**
         * Insert an attachment and its metadata.
         *
         * @since 2.5
         *
         * @param array  $object  attachment object
         * @param string $cropped cropped image URL
         *
         * @return int attachment ID
         */
        public final function insert_attachment($object, $cropped)
        {
        }
        /**
         * Get contents for login form popup
         *
         * @since 2.9.11
         *
         * @return void
         */
        public function get_login_form()
        {
        }
        /**
         * Login user
         *
         * @since 2.9.11
         *
         * @return void
         */
        public static function login_user()
        {
        }
        /**
         * Export witdraw requests
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function withdraw_export_csv()
        {
        }
        /**
         * Dismiss the Dokan upgrade notice.
         *
         * @since 3.1
         *
         * @return void
         */
        public function dismiss_pro_notice()
        {
        }
    }
    class Assets
    {
        /**
         * The constructor
         */
        public function __construct()
        {
        }
        /**
         * Load global admin and promo notices scripts
         *
         * @since 3.3.6
         *
         * @return void
         */
        public function load_dokan_admin_notices_scripts()
        {
        }
        /**
         * Enqueue admin scripts
         */
        public function enqueue_admin_scripts($hook)
        {
        }
        /**
         * Load admin product localize data.
         *
         * @since 3.7.1
         *
         * @return array
         */
        public function admin_product_localize_scripts()
        {
        }
        public function get_localized_price()
        {
        }
        /**
         * SPA Routes
         *
         * @return array
         */
        public function get_vue_admin_routes()
        {
        }
        public function get_vue_frontend_routes()
        {
        }
        /**
         * Register all Dokan scripts and styles
         */
        public function register_all_scripts()
        {
        }
        /**
         * Get registered styles
         *
         * @return array
         */
        public function get_styles()
        {
        }
        /**
         * Get all registered scripts
         *
         * @return array
         */
        public function get_scripts()
        {
        }
        /**
         * Enqueue front-end scripts
         */
        public function enqueue_front_scripts()
        {
        }
        /**
         * Enqueue Dokan Helper Script
         *
         * @since 3.2.7
         */
        public function load_dokan_global_scripts()
        {
        }
        /**
         * Load form validate script args
         *
         * @since 2.5.3
         */
        public static function load_form_validate_script()
        {
        }
        /**
         * Load Dokan Dashboard Scripts
         *
         * @since 2.5.3
         *
         * @global type $wp
         */
        public function dokan_dashboard_scripts()
        {
        }
        /**
         * Load google map script
         *
         * @since 2.5.3
         */
        public function load_gmap_script()
        {
        }
        /**
         * Filter 'dokan' localize script's arguments
         *
         * @since  2.5.3
         *
         * @param array $default_args
         *
         * @return $default_args
         */
        public function conditional_localized_args($default_args)
        {
        }
        /**
         * Get file prefix
         *
         * @return string
         */
        public function get_prefix()
        {
        }
        /**
         * Register scripts
         *
         * @param array $scripts
         *
         * @return void
         */
        public function register_scripts($scripts)
        {
        }
        /**
         * Register styles
         *
         * @param array $styles
         *
         * @return void
         */
        public function register_styles($styles)
        {
        }
        /**
         * Enqueue the scripts
         *
         * @param array $scripts
         *
         * @return void
         */
        public function enqueue_scripts($scripts)
        {
        }
        /**
         * Enqueue styles
         *
         * @param array $styles
         *
         * @return void
         */
        public function enqueue_styles($styles)
        {
        }
        /**
         * Admin localized scripts
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_admin_localized_scripts()
        {
        }
    }
}
namespace WeDevs\Dokan\BackgroundProcess {
    /**
     * Background Process Manager Class.
     *
     * @since DOKAN_LITE_SINCE
     *
     * @property ChangeVendorProductStatus $change_vendor_product_status Instance of WeDevs\Dokan\Vendor\ChangeProductStatus class
     */
    class Manager
    {
        use \Wedevs\Dokan\Traits\ChainableContainer;
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialize classes to chainable container.
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return void
         */
        public function init_classes()
        {
        }
        /**
         * Initialize hooks.
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return void
         */
        public function init_hooks()
        {
        }
        /**
         * Show variable products author updated notice.
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param array $notices
         *
         * @return array $notices
         */
        public function show_variable_products_author_updated_notice($notices)
        {
        }
    }
    /**
     * RewriteVariableProductsAuthor Class.
     *
     * @since DOKAN_LITE_SINCE
     */
    class RewriteVariableProductsAuthor extends \WC_Background_Process
    {
        /**
         * Initiate new background process.
         */
        public function __construct()
        {
        }
        /**
         * Dispatch updater.
         *
         * Updater will still run via cron job if this fails for any reason.
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return void
         */
        public function dispatch()
        {
        }
        /**
         * Perform updates.
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param array $args
         *
         * @return bool|array
         */
        public function task($args)
        {
        }
        /**
         * Rewrite variable product variations author IDs.
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param int $page
         *
         * @return bool|array
         */
        protected function rewrite_variable_product_variations_author_ids($page = 1)
        {
        }
        /**
         * Complete the process.
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return void
         */
        protected function complete()
        {
        }
    }
}
namespace WeDevs\Dokan\Blocks {
    /**
     * Dokan Block For Products.
     *
     * @since 3.7.10
     */
    class ProductBlock
    {
        /**
         * Get Product configurations.
         *
         * @since 3.7.10
         *
         * @return array
         */
        public function get_configurations()
        {
        }
    }
}
namespace WeDevs\Dokan {
    /**
     * Cache Helper class.
     *
     * Manage all of the caches of Dokan and handles it beautifully.
     *
     * @since 3.3.2
     */
    class Cache extends \WeDevs\Dokan\Abstracts\DokanCache
    {
        /**
         * Set Cache Group Prefix.
         *
         * @since 3.3.2
         *
         * @param string $cache_group_prefix
         *
         * @return string
         */
        protected static function get_cache_group_prefix()
        {
        }
        /**
         * Get Cache Key Prefix.
         *
         * @since 3.3.2
         *
         * @return string
         */
        protected static function get_cache_prefix()
        {
        }
    }
    /**
     * Cache Invalidate class.
     *
     * Handles all of the common caches.
     *
     * @since 3.3.2
     */
    class CacheInvalidate
    {
        /**
         * Constructor
         *
         * @since 3.3.2
         */
        public function __construct()
        {
        }
        /**
         * Invalidate comments cache group of the specific post type.
         *
         * @since 3.3.2
         *
         * @param string $group
         * @param int    $user_id
         *
         * @return void
         */
        public function clear_comment_cache($post_type, $user_id)
        {
        }
        /**
         * Fires after new comment is being added.
         *
         * @since 3.3.2
         *
         * @param int $comment_id
         * @param int|string $comment_approved
         * @param array $comment_data
         *
         * @return void
         */
        public function comment_created($comment_id, $comment_approved, $comment_data)
        {
        }
        /**
         * Fires after comment is being updated.
         *
         * @since 3.3.2
         *
         * @param int $comment_id
         * @param array $comment_data
         *
         * @return void
         */
        public function comment_updated($comment_id, $comment_data)
        {
        }
        /**
         * Fires before a comment is being deleted.
         *
         * @since 3.3.2
         *
         * @param int         $comment_id
         * @param \WP_Comment $comment
         *
         * @return void
         */
        public function comment_deleted($comment_id)
        {
        }
        /**
         * Fires after a comment status is being changed.
         *
         * @since 3.3.2
         *
         * @param int    $comment_id     Comment ID.
         * @param string $comment_status Current comment status. Possible values include
         *                               'hold', '0', 'approve', '1', 'spam', and 'trash'.
         *
         * @return void
         */
        public function comment_status_change($comment_id, $comment_status)
        {
        }
    }
}
namespace WeDevs\Dokan\CatalogMode\Admin {
    /**
     * Class Hooks
     *
     * This class will be responsible for admin settings of Catalog Mode feature
     *
     * @since   3.6.4
     *
     * @package WeDevs\Dokan\CatalogMode\Admin
     */
    class Settings
    {
        /**
         * Class constructor
         *
         * @since 3.6.4
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * This method will register catalog mode settings section under Selling Options settings section
         *
         * @since 3.6.4
         *
         * @param array $selling_options
         *
         * @return array
         */
        public function admin_settings($selling_options)
        {
        }
    }
}
namespace WeDevs\Dokan\CatalogMode {
    /**
     * Class Controller
     *
     * This class will include all the related files required for Catalog Mode feature and will work as an entry point for
     * all the hooks.
     *
     * @since   3.6.4
     *
     * @package WeDevs\Dokan\CatalogMode
     */
    class Controller
    {
        use \WeDevs\Dokan\Traits\ChainableContainer;
        /**
         * Class constructor
         *
         * @since 3.6.4
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * This method will load all the required files
         *
         * @since 3.6.4
         *
         * @return void
         */
        private function set_controllers()
        {
        }
    }
}
namespace WeDevs\Dokan\CatalogMode\Dashboard {
    /**
     * ProductBulkEdit class
     *
     * @since   3.6.4
     *
     * @package WeDevs\Dokan\CatalogMode\Dashboard
     */
    class ProductBulkEdit
    {
        /**
         * Class Constructor
         *
         * @since 3.6.4
         */
        public function __construct()
        {
        }
        /**
         * Add bulk edit status.
         *
         * @since 3.6.4
         *
         * @param array $bulk_statuses previous status.
         *
         * @return array
         */
        public function bulk_product_catalog_options($bulk_statuses)
        {
        }
        /**
         * This method will enable/disable catalog mode feature for the selected products.
         *
         * @since 3.6.4
         *
         * @return void
         */
        public function save_bulk_edit_catalog_mode_data($status, $product_ids)
        {
        }
        /**
         * This method will display a message to the vendor if the product update was successful via bulk edit.
         *
         * @since 3.6.4
         *
         * @param $type string
         *
         * @return void
         */
        public function display_product_update_message($type)
        {
        }
    }
    /**
     * Class Hooks
     *
     * This class will load hooks related to frontend
     *
     * @since   3.6.4
     *
     * @package WeDevs\Dokan\CatalogMode
     */
    class Products
    {
        /**
         * Class constructor
         *
         * @since 3.6.4
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * This method will render catalog mode section under single product edit page
         *
         * @since 3.6.4
         *
         * @param $product_id int
         *
         * @return void
         */
        public function render_product_section($product_id)
        {
        }
        /**
         * This method will save catalog mode section data
         *
         * @since 3.6.4
         *
         * @param $product_id int
         *
         * @return void
         */
        public function save_catalog_mode_data($product_id)
        {
        }
    }
    /**
     * Class Hooks
     *
     * This class will be responsible for admin settings of Catalog Mode feature
     *
     * @since   3.6.4
     *
     * @package WeDevs\Dokan\CatalogMode\Dashboard
     */
    class Settings
    {
        /**
         * Class constructor
         *
         * @since 3.6.4
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * This method will render settings fields for Catalog Mode
         *
         * @since 3.6.4
         *
         * @param array $store_settings
         * @param int   $user_id
         *
         * @return void
         */
        public function render_settings_fields($user_id, $store_settings)
        {
        }
        /**
         * This method will save settings fields for Catalog Mode
         *
         * @since 3.6.4
         *
         * @param int   $store_id
         * @param array $dokan_settings
         *
         * @return array
         */
        public function save_settings_fields($dokan_settings, $store_id)
        {
        }
    }
}
namespace WeDevs\Dokan\CatalogMode {
    /**
     * Class Hooks
     *
     * This class will be responsible to include all the helper methods required for Catalog Mode feature.
     *
     * @since   3.6.4
     *
     * @package WeDevs\Dokan\CatalogMode
     */
    class Helper
    {
        /**
         * Check if admin settings is enabled for catalog mode
         *
         * @since 3.6.4
         *
         * @return bool
         */
        public static function is_enabled_by_admin()
        {
        }
        /**
         * Check if hide price settings is enabled for admin
         *
         * @since 3.6.4
         *
         * @return bool
         */
        public static function hide_product_price_option_is_enabled_by_admin()
        {
        }
        /**
         * Check if hide add to cart settings is enabled for admin
         *
         * @since 3.6.4
         *
         * @return bool
         */
        public static function hide_add_to_cart_button_option_is_enabled_by_admin()
        {
        }
        /**
         * Check if admin settings is enabled for catalog mode
         *
         * @since 3.6.4
         *
         * @return bool
         */
        public static function is_enabled_by_vendor($vendor_id = 0)
        {
        }
        /**
         * Check if hide price settings is enabled for admin
         *
         * @since 3.6.4
         *
         * @return bool
         */
        public static function hide_product_price_option_is_enabled_by_vendor($vendor_id = 0)
        {
        }
        /**
         * Check if hide add to cart settings is enabled for admin
         *
         * @since 3.6.4
         *
         * @return bool
         */
        public static function hide_add_to_cart_button_option_is_enabled_by_vendor($vendor_id = 0)
        {
        }
        /**
         * This method will return catalog mode saved settings data for a vendor
         *
         * @since 3.6.4
         *
         * @param int $vendor_id
         *
         * @return array
         */
        public static function get_vendor_catalog_mode_settings($vendor_id = 0)
        {
        }
        /**
         * This method will return default settings for catalog mode
         *
         * @since 3.6.4
         *
         * @return string[]
         */
        public static function get_defaults()
        {
        }
        /**
         * This method will check if catalog mode data is set for a product.
         *
         * @since 3.6.4
         *
         * @param $product int|\WC_Product
         *
         * @return bool
         */
        public static function is_enabled_for_product($product)
        {
        }
        /**
         * This method will return catalog mode data for a product.
         *
         * @since 3.6.4
         *
         * @param $product int|\WC_Product
         *
         * @return string[]
         */
        public static function get_catalog_mode_data_by_product($product)
        {
        }
    }
    /**
     * Class Hooks
     *
     * This class will load hooks related to frontend
     *
     * @since   3.6.4
     *
     * @package WeDevs\Dokan\CatalogMode
     */
    class Hooks
    {
        /**
         * Class constructor
         *
         * @since 3.6.4
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * This method will hide add to cart button for products if enabled by vendor
         *
         * @since 3.6.4
         *
         * @param $purchasable bool
         * @param $product     \WC_Product
         *
         * @return bool
         */
        public function hide_add_to_cart_button($purchasable, $product)
        {
        }
        /**
         * This method will hide product price if enabled by vendor
         *
         * @since 3.6.4
         *
         * @param $price
         * @param $product
         *
         * @return string
         */
        public function hide_product_price($price, $product)
        {
        }
    }
}
namespace WeDevs\Dokan {
    /**
     * Dokan Commission Class
     *
     * @since 2.9.21
     */
    class Commission
    {
        /**
         * Order id holder
         *
         * @since 2.9.21
         *
         * @var integer
         */
        public $order_id = 0;
        /**
         * Order Line Item Id For Product
         *
         * @since 3.8.0
         *
         * @var int $order_item_id
         */
        protected $order_item_id = 0;
        /**
         * Order quantity holder
         *
         * @since 2.9.21
         *
         * @var integer
         */
        public $quantity = 0;
        /**
         * Class constructor
         *
         * @since  2.9.21
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Calculate gateway fee
         *
         * @since 2.9.21
         *
         * @param int $order_id
         *
         * @return void
         */
        public function calculate_gateway_fee($order_id)
        {
        }
        /**
         * Hide extra meta data
         *
         * @since  2.9.21
         *
         * @param array
         *
         * @return array
         */
        public function hide_extra_data($formatted_meta)
        {
        }
        /**
         * Set order id
         *
         * @since  2.9.21
         *
         * @param int $id
         *
         * @return void
         */
        public function set_order_id($id)
        {
        }
        /**
         * Set order line item id
         *
         * @since 3.8.0
         *
         * @param int $item_id
         *
         * @return void
         */
        public function set_order_item_id($item_id)
        {
        }
        /**
         * Get order id
         *
         * @since  2.9.21
         *
         * @return int
         */
        public function get_order_id()
        {
        }
        /**
         * Get order line item id
         *
         * @since 3.8.0
         *
         * @return int
         */
        public function get_order_item_id()
        {
        }
        /**
         * Set order quantity
         *
         * @since  2.9.21
         *
         * @param int $number
         *
         * @return void
         */
        public function set_order_qunatity($number)
        {
        }
        /**
         * Get order quantity
         *
         * @since  2.9.21
         *
         * @return int
         */
        public function get_order_qunatity()
        {
        }
        /**
         * Get earning by product
         *
         * @since  2.9.21
         *
         * @param int|WC_Product $product
         * @param string         $context [admin|seller]
         * @param float|null     $price
         *
         * @return float|WP_Error
         */
        public function get_earning_by_product($product, $context = 'seller', $price = null)
        {
        }
        /**
         * Get earning by order
         *
         * @since  2.9.21
         * @since  3.7.19 Shipping tax recipient support added.
         *
         * @param int|WC_Order $order Order.
         * @param string       $context
         *
         * @return float|void|WP_Error|null on failure
         */
        public function get_earning_by_order($order, $context = 'seller')
        {
        }
        /**
         * Get global rate
         *
         * @since  2.9.21
         *
         * @return float
         */
        public function get_global_rate()
        {
        }
        /**
         * Get vendor wise commission rate
         *
         * @since  2.9.21
         *
         * @param int $vendor_id
         *
         * @return float
         */
        public function get_vendor_wise_rate($vendor_id)
        {
        }
        /**
         * Get product wise commission rate
         *
         * @since  2.9.21
         *
         * @param int $product_id
         *
         * @return float
         */
        public function get_product_wise_rate($product_id)
        {
        }
        /**
         * Validate product id (if it's a variable product, return it's parent id)
         *
         * @since  2.9.21
         *
         * @param int $product_id
         *
         * @return int
         */
        public function validate_product_id($product_id)
        {
        }
        /**
         * Get category wise commission rate
         *
         * @since  2.9.21
         *
         * @param int $product_id
         *
         * @return float
         */
        public function get_category_wise_rate($product_id)
        {
        }
        /**
         * Get global commission type
         *
         * @since  2.9.21
         *
         * @return string
         */
        public function get_global_type()
        {
        }
        /**
         * Get vendor wise commission type
         *
         * @since  2.9.21
         *
         * @param int $vendor_id
         *
         * @return string
         */
        public function get_vendor_wise_type($vendor_id)
        {
        }
        /**
         * Get category wise commission type
         *
         * @since  2.9.21
         *
         * @param int $product_id
         *
         * @return string
         */
        public function get_category_wise_type($product_id)
        {
        }
        /**
         * Get product wise commission type
         *
         * @since  2.9.21
         *
         * @param int $product_id
         *
         * @return string
         */
        public function get_product_wise_type($product_id)
        {
        }
        /**
         * Validate commission rate
         *
         * @since  2.9.21
         *
         * @param float $rate
         *
         * @return float
         */
        public function validate_rate($rate)
        {
        }
        /**
         * Get global earning
         *
         * @since  2.9.21
         *
         * @param float $product_price
         *
         * @return float|null on failure
         */
        public function get_global_earning($product_price)
        {
        }
        /**
         * Get vendor wise earning
         *
         * @since  2.9.21
         *
         * @param int   $vendor_id
         * @param float $product_price
         *
         * @return float|null on failure
         */
        public function get_vendor_wise_earning($vendor_id, $product_price)
        {
        }
        /**
         * Get category wise earning
         *
         * @since  2.9.21
         *
         * @param int   $product_id
         * @param float $product_price
         *
         * @return float|null on failure
         */
        public function get_category_wise_earning($product_id, $product_price)
        {
        }
        /**
         * Get product wise earning
         *
         * @since  2.9.21
         *
         * @param int $product_id
         * @param int $product_price
         *
         * @return float|null on failure
         */
        public function get_product_wise_earning($product_id, $product_price)
        {
        }
        /**
         * Prepare for calculation
         *
         * @since  2.9.21
         *
         * @param callable $callable
         * @param int      $product_id
         * @param float    $product_price
         *
         * @return float | null on failure
         */
        public function prepare_for_calculation($callable, $product_id = 0, $product_price = 0)
        {
        }
        /**
         * Get product wise additional fee
         *
         * @since  2.9.21
         *
         * @param int $product_id
         *
         * @return float|null on failure
         */
        public function get_product_wise_additional_fee($product_id)
        {
        }
        /**
         * Get global wise additional fee
         *
         * @since  2.9.21
         *
         * @param int $product_id
         *
         * @return float|null on failure
         */
        public function get_global_additional_fee()
        {
        }
        /**
         * Get vendor wise additional fee
         *
         * @since  2.9.21
         *
         * @param int $vendor_id
         *
         * @return float|null on failure
         */
        public function get_vendor_wise_additional_fee($vendor_id)
        {
        }
        /**
         * Get category wise additional fee
         *
         * @since  2.9.21
         *
         * @param int $product_id
         *
         * @return float|null on failure
         */
        public function get_category_wise_additional_fee($product_id)
        {
        }
        /**
         * Get earning from order table
         *
         * @since  2.9.21
         *
         * @param int    $order_id
         * @param string $context
         *
         * @return float|null on failure
         */
        public function get_earning_from_order_table($order_id, $context = 'seller')
        {
        }
        /**
         * Get shipping fee recipient
         *
         * @since  2.9.21
         * @since  3.4.1 introduced the shipping fee recipient hook
         *
         * @param WC_Order|int $order
         *
         * @return string
         */
        public function get_shipping_fee_recipient($order)
        {
        }
        /**
         * Get tax fee recipient
         *
         * @since  2.9.21
         * @since  3.4.1 introduced the tax fee recipient hook
         *
         * @param WC_Order|int $order
         *
         * @return string|WP_Error
         */
        public function get_tax_fee_recipient($order)
        {
        }
        /**
         * Get shipping tax fee recipient.
         *
         * @since 3.7.19
         *
         * @param WC_Order $order Order.
         *
         * @return string
         */
        public function get_shipping_tax_fee_recipient($order) : string
        {
        }
        /**
         * Get total shipping tax refunded for the order.
         *
         * @since 3.7.19
         *
         * @param WC_Order $order Order.
         *
         * @return float
         */
        public function get_total_shipping_tax_refunded(\WC_Order $order) : float
        {
        }
        /**
         * Get processing fee
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param WC_Order $order
         *
         * @return float
         */
        public function get_processing_fee($order)
        {
        }
        /**
         * Get all the orders to be processed
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param WC_Order $order
         *
         * @return WC_Order[]
         */
        public function get_all_order_to_be_processed($order)
        {
        }
        /**
         * Calculate commission (commission priority [1.product, 2.category, 3.vendor, 4.global] wise)
         *
         * @since  2.9.21
         *
         * @param int   $product_id
         * @param float $product_price
         * @param int   $vendor_id
         *
         * @return float
         */
        public function calculate_commission($product_id, $product_price, $vendor_id = null)
        {
        }
    }
    /**
     * Core Class for Dokan Main functionality
     *
     * @since   3.0.0
     *
     * @package dokan
     */
    class Core
    {
        /**
         * Load autometically when class initiate
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Block user access to admin panel for specific roles
         *
         * @since 1.0.0
         *
         * @global string $pagenow
         */
        public function block_admin_access()
        {
        }
        /**
         * Hide other users uploads for `seller` users
         *
         * Hide media uploads in page "upload.php" and "media-upload.php" for
         * sellers. They can see only thier uploads.
         *
         * FIXME: fix the upload counts
         *
         * @param string  $where
         *
         * @global object $wpdb
         * @global string $pagenow
         *
         * @return string
         */
        public function hide_others_uploads($where)
        {
        }
        /**
         * Add body class for dokan-dashboard
         *
         * @since 3.0.0
         *
         * @param array $classes
         */
        public function add_dashboard_template_class($classes)
        {
        }
        /**
         * Create a nicely formatted and more specific title element text for output
         * in head of document, based on current view.
         *
         * @since Dokan 1.0.4
         *
         * @param string $title Default title text for current view.
         * @param string $sep   Optional separator.
         *
         * @return string The filtered title.
         */
        public function wp_title($title, $sep)
        {
        }
        /**
         * Redirect if not logged Seller
         *
         * @since 2.4
         *
         * @return void [redirection]
         */
        public function redirect_if_not_logged_seller()
        {
        }
        /**
         * Redirect after activation
         *
         * @since 2.8.0
         *
         * @return void
         */
        public function redirect_after_activate()
        {
        }
    }
    /**
     * Dokan Customiezr
     */
    class Customizer
    {
        /**
         * Settings capability
         *
         * @var string
         */
        private $capability = 'manage_options';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Enequeue customize scripts for previewer
         *
         * @return void
         */
        public function enqueue_preview_scripts()
        {
        }
        /**
         * Enqueue customize scripts for controls
         *
         * @return void
         */
        public function enqueue_control_scripts()
        {
        }
        /**
         * Add settings to the customizer.
         */
        public function add_sections(\WP_Customize_Manager $wp_customize)
        {
        }
        /**
         * Add store sections
         *
         * @return void
         */
        protected function add_store_section(\WP_Customize_Manager $wp_customize)
        {
        }
        /**
         * Activate/deactivate controls if store sidebar is enabled
         *
         * When the theme sidebar is enabled, we need to deactivate the
         * sidebar widget controls. It's been done instantly from JS in
         * the `customize-controls.js` file, but when the preview
         * refreshes, it appears again because customizer values are set
         * again when it does. So based on the settings chosen from the
         * customizer, we need to activate/deactivate from the PHP side
         * as well.
         *
         * @return bool
         */
        public function should_display_widget_controls(\WP_Customize_Control $control)
        {
        }
        /**
         * Converts a boolean value to a 'on' or 'off'.
         *
         * @param bool $bool
         *
         * @return string
         */
        public function bool_to_on_off($bool)
        {
        }
        /**
         * Convert a 'on' or 'off' to boolean
         *
         * @param string $value
         *
         * @return bool
         */
        public function on_off_to_bool($value)
        {
        }
        /**
         * Convert an empty value to boolean
         *
         * @param string $value
         *
         * @return bool
         */
        public function empty_to_bool($value)
        {
        }
        /**
         * Convert a boolean value to empty/string
         *
         * @param string $value
         *
         * @return bool
         */
        public function bool_to_string($value, $obj)
        {
        }
    }
}
namespace WeDevs\Dokan\Customizer {
    /**
     * The radio image class.
     */
    class HeadingControl extends \WP_Customize_Control
    {
        /**
         * Declare the control type.
         *
         * @var string
         */
        public $type = 'dokan-heading';
        /**
         * Render the control's content.
         *
         * @see WP_Customize_Control::render_content()
         */
        protected function render_content()
        {
        }
    }
    /**
     * The radio image class.
     */
    class RadioImageControl extends \WP_Customize_Control
    {
        /**
         * Declare the control type.
         *
         * @var string
         */
        public $type = 'dokan-radio-image';
        /**
         * Enqueue scripts and styles for the custom control.
         */
        public function enqueue()
        {
        }
        /**
         * Print radio image style
         *
         * @return void
         */
        public static function print_inline_style()
        {
        }
        /**
         * Render the control to be displayed in the Customizer.
         */
        public function render_content()
        {
        }
    }
}
namespace WeDevs\Dokan\Dashboard {
    class Manager
    {
        use \WeDevs\Dokan\Traits\ChainableContainer;
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function __construct()
        {
        }
    }
}
namespace WeDevs\Dokan\Dashboard\Templates {
    class Main
    {
        public function __construct()
        {
        }
        /**
         * Dashboard Side Navigations
         *
         * @since 2.4
         *
         * @return void
         */
        public static function dashboard_side_navigation()
        {
        }
        /**
         * Adds notification count to menu and submenu of vendor dashboard
         *
         * @since 3.10.3
         *
         * @param string $menu_title Menu title
         * @param array $menu_details Menu details array
         *
         * @return string
         */
        public function add_notification_count(string $menu_title, array $menu_details) : string
        {
        }
    }
    class Manager
    {
        use \WeDevs\Dokan\Traits\ChainableContainer;
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function __construct()
        {
        }
    }
    /**
     * Multi step category ui class.
     *
     * @since 3.6.2
     */
    class MultiStepCategories
    {
        /**
         * Class constructor.
         *
         * @since 3.6.2
         */
        public function __construct()
        {
        }
        /**
         * Returns new category select ui html elements.
         *
         * @since 3.6.2
         *
         * @return void
         */
        public function load_add_category_modal()
        {
        }
    }
    /**
     * Dokan Order Template Class
     *
     * @since  2.4
     *
     * @author weDves <info@wedevs.com>
     */
    class Orders
    {
        /**
         * Load autometically when class inistantiate
         * hooked up all actions and filters
         *
         * @since 2.4
         */
        public function __construct()
        {
        }
        /**
         * Show Seller Enable Error Message
         *
         * @since 2.4
         *
         * @return void
         */
        public function show_seller_enable_message()
        {
        }
        /**
         * Render Order listing status filter template
         *
         * @since 2.4
         *
         * @return void
         */
        public function order_listing_status_filter()
        {
        }
        /**
         * Render the order details page
         *
         * @since 3.6.3
         */
        public function order_details_content()
        {
        }
        /**
         * Get Order Main Content
         *
         * @since 2.4
         * @since 3.6.3 Moved order details content to a different function
         *
         * @return void
         */
        public function order_main_content()
        {
        }
        /**
         * Export user orders to CSV format
         *
         * @since 1.4
         * @since 3.2.13  dokan_export_order permission check added
         *                for vendor staff
         *
         * @return void
         */
        public function handle_order_export()
        {
        }
        /**
         * Add a specific class to the body of Vendor Dashboard Orders page to apply css into the select2 input box
         *
         * @since 3.6.3
         *
         * @param array $classes
         *
         * @return array
         */
        public function add_css_class_to_body($classes)
        {
        }
        /**
         * Add Pagination information into template arguments
         *
         * @since 3.6.3
         *
         * @param int   $limit
         * @param int   $page
         * @param array $args
         * @param array $query_args
         *
         * @return array
         */
        private function add_pagination_info($limit, $page, $order_count)
        {
        }
        /**
         * Add pending order count to dashboard menu.
         *
         * @since 3.10.3
         *
         * @param array $menu Menu Array.
         *
         * @return array
         */
        public function add_pending_order_count($menu)
        {
        }
    }
    /**
     * Load Reverse Withdrawal Template
     *
     * @since   3.5.1
     *
     * @package Wedevs\Dokan\Dashboard\Templates
     */
    class ReverseWithdrawal
    {
        /**
         * @since 3.5.1
         *
         * @var int $seller_id
         */
        protected $seller_id;
        /**
         * @since 3.5.1
         *
         * @var string[] $transaction_date
         */
        protected $transaction_date = ['from' => '', 'to' => ''];
        /**
         * Class Constructor.
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * Display notice on vendor dashboard page
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function display_notice_on_vendor_dashboard()
        {
        }
        /**
         * Display notice on reverse withdrawal page
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function display_payment_notice()
        {
        }
        /**
         * Display action taken notice
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function display_action_taken_notice()
        {
        }
        /**
         * Dokan Reverse Withdrawal header Template render
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function render_header()
        {
        }
        /**
         * Load payment section
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function render_balance_section()
        {
        }
        /**
         * Dokan Reverse Withdrawal header Template render
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function render_filter_section()
        {
        }
        /**
         * Dokan Reverse Withdrawal header Template render
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function render_transactions_table()
        {
        }
        /**
         * Enqueue Frontend Scripts
         *
         * @since 3.5.1
         *
         * @param string $hook
         *
         * @return void
         */
        public function wp_enqueue_scripts($hook)
        {
        }
        /**
         * Localize Reverse Withdrawal Scripts
         *
         * @since 3.5.1
         *
         * @param array $localize_script
         *
         * @return array
         */
        public function localized_scripts($localize_script)
        {
        }
        /**
         * Get transaction date
         *
         * @since 3.5.1
         *
         * @return string[]
         */
        protected function get_transaction_date()
        {
        }
    }
    /**
     * Dokan Dashboard Withdraw class
     *
     * @since 2.4
     */
    class Withdraw
    {
        /**
         * Current status
         *
         * @var null|string
         */
        protected $current_status = null;
        /**
         * Error bag
         *
         * @var null|\WP_Error;
         */
        protected $errors = null;
        /**
         * Load Automatically When class initiate
         *
         * Trigger all actions
         *
         * @since 2.4
         */
        public function __construct()
        {
        }
        /**
         * Add error to error bag
         *
         * @since 3.0.0
         *
         * @param string $message
         * @param string $code
         */
        public function add_error($message, $code = 'dokan_vendor_dashboard_template_withdraw_error')
        {
        }
        /**
         * Get current withdraw status
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_current_status()
        {
        }
        /**
         * Handle Withdraw form submission
         *
         * @return void
         */
        public function handle_request()
        {
        }
        /**
         * Handle withdraw cancellation request
         *
         * @since 3.0.0
         *
         * @return void
         */
        protected function handle_cancel_request()
        {
        }
        /**
         * Show Seller Enable Error Message
         *
         * @since 2.4
         *
         * @return void
         */
        public function show_seller_enable_message()
        {
        }
        /**
         * Print error messages
         *
         * @since 3.0.0
         *
         * @param string|array $messages
         * @param bool   $deleted
         *
         * @return void
         */
        protected function show_error_messages($messages, $deleted = false)
        {
        }
        /**
         * Print warning message
         *
         * @since 3.0.0
         *
         * @param string $message
         * @param bool   $deleted
         *
         * @return void
         */
        protected function show_warning_message($message, $deleted = false)
        {
        }
        /**
         * Dokan Withdraw header Template render
         *
         * @since 2.4
         *
         * @return void
         */
        public function withdraw_header_render()
        {
        }
        /**
         * Render WIthdraw Status Filter template
         *
         * @since 2.4
         *
         * @return void
         */
        public function withdraw_status_filter()
        {
        }
        /**
         * Get Withdraw form and listing
         *
         * @since 2.4
         * @since 3.3.1 Display only in `withdraw-requests` endpoint.
         *
         * @return void
         */
        public function withdraw_form_and_listing()
        {
        }
        /**
         * List withdraw request for a user for dashboard.
         *
         * @since 3.3.1
         *
         * @param  int  $user_id
         *
         * @return void
         */
        public function withdraw_requests($user_id)
        {
        }
        /**
         * Show alert messages
         *
         * @return void
         */
        public function show_alert_messages()
        {
        }
        /**
         * Print the approved user withdraw requests
         *
         * @since 3.3.1
         *
         * @param  int  $user_id
         *
         * @return void
         */
        public function user_approved_withdraws($user_id)
        {
        }
        /**
         * Print the cancelled user withdraw requests
         *
         * @param  int  $user_id
         *
         * @return void
         */
        public function user_cancelled_withdraws($user_id)
        {
        }
        /**
         * Display dashboard content
         *
         * @since 3.3.1
         *
         * @return void
         */
        public function withdraw_dashboard_layout_display()
        {
        }
        /**
         * Include withdraw request popup content
         *
         * @since 3.3.1
         *
         * @return void
         */
        public function include_withdraw_popup_templates()
        {
        }
        /**
         * Populate withdraw request popup content.
         *
         * @since 3.3.1
         *
         * @return void
         */
        public function withdraw_request_popup_form_content()
        {
        }
        /**
         * Get pending withdraw request in dashboard listing.
         *
         * @since 3.3.1
         *
         * @return void
         */
        public function pending_withdraw_requests()
        {
        }
        /**
         * Display withdraw listing.
         *
         * @since 3.3.1
         *
         * @param array $query_vars
         *
         * @return void
         */
        public function display_request_listing($query_vars)
        {
        }
        /**
         * Set withdraw menu as active.
         *
         * @since 3.3.1
         *
         * @param string $active_menu
         * @param $request
         * @param array $active
         *
         * @return string
         */
        public function active_dashboard_nav_menu($active_menu, $request, $active)
        {
        }
        /**
         * Redirect to vendor dashboard.
         *
         * @since 3.3.1
         *
         * @return void
         */
        public function redirect_to_dashboard()
        {
        }
    }
}
namespace WeDevs\Dokan\DummyData {
    /**
     * Dokan dummy data importer class.
     *
     * @since 3.6.2
     */
    class Importer extends \WC_Product_Importer
    {
        /**
         * Created or existing vendor id
         *
         * @var int
         */
        private $vendor_id = null;
        public function __construct()
        {
        }
        /**
         * Create and return dummy vendor or if exists return the existing vendor
         *
         * @since 3.6.2
         *
         * @param array $data
         *
         * @return object|Vendor instance
         */
        public function create_dummy_vendor($data)
        {
        }
        /**
         * Creates dummy vendors and products.
         *
         * @since 3.6.2
         *
         * @param int $vendor_id
         * @param array $products
         *
         * @return array
         */
        public function create_dummy_products_for_vendor($vendor_id, $products)
        {
        }
        /**
         * Formats category / tags ids for products
         *
         * @since 3.6.2
         *
         * @param array $value
         *
         * @return array
         */
        private function formate_product_categories_or_tags($value, $taxonomy, $category_or_tag)
        {
        }
        /**
         * Formats string by a separator
         *
         * @since 3.6.2
         *
         * @param string $data
         *
         * @param string $separator
         *
         * @return array
         */
        private function formate_string_by_separator($data = '', $separator = ',')
        {
        }
        /**
         * Process importer.
         *
         * Do not import products with IDs or SKUs that already exist if option
         * update existing is false, and likewise, if updating products, do not
         * process rows which do not exist if an SKU is provided.
         *
         * @since 3.6.2
         *
         * @return array
         */
        public function import()
        {
        }
        /**
         * Check if the product is from my store
         *
         * @param int|WC_Product $product
         *
         * @return bool
         */
        private function is_my_product($product)
        {
        }
        /**
         * Remove all dummy data ( products and vendors ) that has 'dokan_dummy_data' meta key
         *
         * @since 3.6.2
         *
         * @return string
         */
        public function clear_all_dummy_data()
        {
        }
        /**
         * Delete orders data of a dummy vendors from database.
         *
         * @since 3.6.2
         *
         * @param array $args
         *
         * @return void
         */
        public function delete_dummy_vendor_orders($args)
        {
        }
    }
}
namespace WeDevs\Dokan\Emails {
    /**
     * Customer Email to vendor from contact form widget.
     *
     * @class       Dokan_Email_Contact_Seller
     * @version     2.6.8
     * @author      weDevs
     * @extends     WC_Email
     */
    class ContactSeller extends \WC_Email
    {
        /**
         * Reply email
         *
         * @since DOKAN_LITE_SINCE
         *
         * @var string
         */
        private $from_email;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger this email.
         */
        public function trigger($seller_email, $contact_name, $contact_email, $contact_message)
        {
        }
        /**
         * Get the from address for outgoing emails.
         *
         * @return string
         */
        public function get_from_address($from_email = '')
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialize settings form fields.
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * Dokan email handler class
     *
     * @package Dokan
     */
    class Manager
    {
        /**
         * Load autometically when class initiate
         */
        public function __construct()
        {
        }
        /**
         * Get from name for email.
         *
         * @access public
         * @return string
         */
        public function get_from_name()
        {
        }
        /**
         * Get from email address.
         *
         * @access public
         * @return string
         */
        public function get_from_address()
        {
        }
        /**
         * Get admin email address
         *
         * @return string
         */
        public function admin_email()
        {
        }
        /**
         * Get user agent string
         *
         * @return string
         */
        public function get_user_agent()
        {
        }
        /**
         * Replace currency HTML entities with symbol
         *
         * @param string $amount
         *
         * @return string
         */
        public function currency_symbol($amount)
        {
        }
        /**
         * Add Dokan Email classes in WC Email
         *
         * @since 2.6.8
         *
         * @param array $wc_emails
         *
         * @return $wc_emails
         */
        public function load_dokan_emails($wc_emails)
        {
        }
        /**
         * Set template override directory for Dokan Emails
         *
         * @since 2.6.8
         *
         * @param string $template_dir
         *
         * @param string $template
         *
         * @return string
         */
        public function set_email_template_directory($template_dir, $template)
        {
        }
        /**
         * Register Dokan Email actions for WC
         *
         * @since 2.6.8
         *
         * @param array $actions
         *
         * @return $actions
         */
        public function register_email_actions($actions)
        {
        }
        /**
         * Send email to seller from the seller contact form
         *
         * @param string $seller_email
         * @param string $from_name
         * @param string $from_email
         * @param string $message
         *
         * @return void
         */
        public function contact_seller($seller_email, $from_name, $from_email, $message)
        {
        }
        /**
         * Send seller email notification when a new refund request is made
         *
         * @param WP_User $seller_mail
         * @param int $order_id
         * @param object $refund
         *
         * @return void
         */
        public function dokan_refund_seller_mail($seller_mail, $order_id, $status, $amount, $refund_reason)
        {
        }
        /**
         * Send admin email notification when a new refund request is cancle
         *
         * @param string $seller_mail
         * @param int $order_id
         * @param int $refund_id
         *
         * @return @void
         */
        public function dokan_refund_request($order_id)
        {
        }
        /**
         * Prepare body for withdraw email
         *
         * @param string $body
         * @param WP_User $user
         * @param float $amount
         * @param string $method
         * @param string $note
         *
         * @return string
         */
        public function prepare_withdraw($body, $user, $amount, $method, $note = '')
        {
        }
        /**
         * Send admin email notification when a new withdraw request is made
         *
         * @param WP_User $user
         * @param float $amount
         * @param string $method
         */
        public function new_withdraw_request($user, $amount, $method)
        {
        }
        /**
         * Send email to user once a withdraw request is approved
         *
         * @param int $user_id
         * @param float $amount
         * @param string $method
         *
         * @return 3.0.0
         */
        public function withdraw_request_approve($user_id, $amount, $method)
        {
        }
        /**
         * Send email to user once a order has been cancelled
         *
         * @param int $user_id
         * @param float $amount
         * @param string $method
         * @param string $note
         *
         * @since 3.0.0
         */
        public function withdraw_request_cancel($user_id, $amount, $method, $note = '')
        {
        }
        /**
         * Send email to admin once a new seller registered
         *
         * @param int $seller_id
         *
         * @return void
         */
        public function new_seller_registered_mail($seller_id)
        {
        }
        /**
         * Send email to admin once a product is added
         *
         * @param int $product_id
         * @param string $status
         *
         * @return void
         */
        public function new_product_added($product_id, $status = 'pending')
        {
        }
        /**
         * Send email to seller once a product is published
         *
         * @param WP_Post $post
         * @param WP_User $seller
         *
         * @return void
         */
        public function product_published($post, $seller)
        {
        }
        /**
         * Send the email.
         *
         * @access public
         *
         * @param mixed $to
         * @param mixed $subject
         * @param mixed $message
         * @param string $headers
         * @param string $attachments
         *
         * @return void
         */
        public function send($to, $subject, $message, $headers = array())
        {
        }
    }
    /**
     * New Product Email.
     *
     * An email sent to the admin when a new Product is created by vendor.
     *
     * @class       Dokan_Email_New_Product
     * @version     2.6.8
     * @author      weDevs
     * @extends     WC_Email
     */
    class NewProduct extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param int $product_id The product ID.
         */
        public function trigger($product_id)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise settings form fields.
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * New Product Email.
     *
     * An email sent to the admin when a new Product is created by vendor.
     *
     * @class       Dokan_Email_New_Product_Pending
     * @version     2.6.8
     * @package     Dokan/Classes/Emails
     * @author      weDevs
     * @extends     WC_Email
     */
    class NewProductPending extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param int $product_id The product ID.
         */
        public function trigger($product_id)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise settings form fields.
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * New Seller Email.
     *
     * @version     2.6.6
     * @package     Dokan/Classes/Emails
     * @author      weDevs
     * @extends     WC_Email
     */
    class NewSeller extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param int $user_id The user ID.
         * @param array $shop_info Store info.
         */
        public function trigger($user_id, $shop_info)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise settings form fields.
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * New Product Published Email to vendor.
     *
     * An email sent to the vendor when a pending Product is published by admin.
     *
     * @class       Dokan_Email_Product_Published
     * @version     2.6.8
     * @author      weDevs
     * @extends     WC_Email
     */
    class ProductPublished extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param \WP_Post $post The product as post.
         * @param \WP_User $seller.
         */
        public function trigger($post, $seller)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise settings form fields.
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * Reverse Withdrawal Invoice Email.
     *
     * @since 3.5.1
     *
     * @extends WC_Email
     *
     * @package WeDevs\Dokan\Emails
     */
    class ReverseWithdrawalInvoice extends \WC_Email
    {
        /**
         * @var \WeDevs\Dokan\Vendor\Vendor|null
         *
         * @since 3.5.1
         */
        protected $seller_info;
        /**
         * @var array|null
         *
         * @since 3.5.1
         *
         * @see Helper::get_vendor_due_status()
         */
        protected $due_status;
        /**
         * Constructor.
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since 3.5.1
         *
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since 3.5.1
         *
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Default content to show below main email content.
         *
         * @since 3.5.1
         *
         * @return string
         */
        public function get_default_additional_content()
        {
        }
        /**
         * Trigger this email.
         *
         * @since 3.5.1
         *
         * @param int $vendor_id
         * @param array $due_status
         *
         * @return void
         */
        public function trigger($vendor_id, $due_status = null)
        {
        }
        /**
         * Get vendor email address
         *
         * @since 3.5.1
         *
         * @return string|null
         */
        public function get_recipient()
        {
        }
        /**
         * Get content html.
         *
         * @since 3.5.1
         *
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @since 3.5.1
         *
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialize settings form fields.
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * Completed Order Email.
     *
     * An email sent to the admin when a order is completed for.
     *
     * @class       VendorCompletedOrder
     * @version     DOKAN_LITE_SINCE
     * @package     Dokan/Classes/Emails
     * @author      weDevs
     * @extends     WC_Email
     */
    class VendorCompletedOrder extends \WC_Email
    {
        public $order_info;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since  DOKAN_LITE_SINCE
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  DOKAN_LITE_SINCE
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param int $order_id The Order ID.
         * @param array $order.
         */
        public function trigger($order_id, $order = false)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise settings form fields.
         */
        public function init_form_fields()
        {
        }
        /**
         * Prevent sub-order email for admin
         *
         * @param $bool
         * @param $order
         *
         * @return bool
         */
        public function prevent_sub_order_admin_email($bool, $order)
        {
        }
    }
    /**
     * New Order Email.
     *
     * An email sent to the admin when a new order is received/paid for.
     *
     * @class       VendorNewOrder
     * @version     2.6.8
     * @package     Dokan/Classes/Emails
     * @author      weDevs
     * @extends     WC_Email
     */
    class VendorNewOrder extends \WC_Email
    {
        public $order_info;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param int $order_id The Order ID.
         * @param array $order.
         */
        public function trigger($order_id, $order = false)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise settings form fields.
         */
        public function init_form_fields()
        {
        }
        /**
         * Prevent sub-order email for admin
         *
         * @param $bool
         * @param $order
         *
         * @return bool
         */
        public function prevent_sub_order_admin_email($bool, $order)
        {
        }
    }
    /**
     * Send email to vendor when a product is reviewed
     *
     * @since       3.9.2
     *
     * @class       Dokan_Email_Vendor_Product_Review
     *
     * @author      weDevs
     *
     * @extends     WC_Email
     */
    class VendorProductReview extends \WC_Email
    {
        /**
         * Reply email
         *
         * @since 3.9.2
         *
         * @var string
         */
        private $from_email;
        /**
         * Constructor.
         *
         * @since 3.9.2
         */
        public function __construct()
        {
        }
        /**
         * Get the email subject.
         *
         * @since  3.9.2
         *
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.9.2
         *
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger this email.
         *
         * @since 3.9.2
         *
         * @param int $comment_id
         *
         * @return void
         */
        public function trigger($comment_id)
        {
        }
        /**
         * Get the from address for outgoing emails.
         *
         * @since 3.9.2
         *
         * @return string
         */
        public function get_from_address($from_email = '')
        {
        }
        /**
         * Get content html.
         *
         * @since 3.9.2
         *
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @since 3.9.2
         *
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialize settings form fields.
         *
         * @since 3.9.2
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * New Product Email.
     *
     * An email sent to the admin when a new Product is created by vendor.
     *
     * @class       Dokan_Vendor_Withdraw_Request
     * @version     2.6.8
     * @author      weDevs
     * @extends     WC_Email
     */
    class VendorWithdrawRequest extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param int $user_id User ID.
         * @param mixed $amount Withdrawal amount.
         * @param string $method Withdrawal method.
         */
        public function trigger($user_id, $amount, $method)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise settings form fields.
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * New Product Email.
     *
     * An email sent to the admin when a new Product is created by vendor.
     *
     * @class       Dokan_Email_Withdraw_Approved
     * @version     2.6.8
     * @author      weDevs
     * @extends     WC_Email
     */
    class WithdrawApproved extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param \WeDevs\Dokan\Withdraw\Withdraw $withdraw .
         */
        public function trigger($withdraw)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise settings form fields.
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * Withdraw Request Cancelled
     *
     * An email sent to the vendor when a withdrawal request is cancelled by admin.
     *
     * @class       Dokan_Email_Withdraw_Cancelled
     * @version     2.6.8
     * @author      weDevs
     * @extends     WC_Email
     */
    class WithdrawCancelled extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param \WeDevs\Dokan\Withdraw\Withdraw $withdraw.
         */
        public function trigger($withdraw)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise settings form fields.
         */
        public function init_form_fields()
        {
        }
    }
}
namespace WeDevs\Dokan\Exceptions {
    class DokanException extends \Exception
    {
        /**
         * Error code
         *
         * @since 2.9.16
         *
         * @var string
         */
        protected $error_code = '';
        /**
         * Class constructor
         *
         * @since 2.9.16
         * @since 3.0.0 $error_code can be instance of WP_Error which is
         *                         useful for multiple error codes and messages in
         *                         a single WP_Error instance.
         *
         * @param string|\WP_Error $error_code  Error code string or WP_Error
         * @param string           $message
         * @param int              $status_code
         */
        public function __construct($error_code, $message = '', $status_code = 422)
        {
        }
        /**
         * Get error code
         *
         * @since 2.9.16
         *
         * @return string
         */
        public final function get_error_code()
        {
        }
        /**
         * Get error message
         *
         * @since 2.9.16
         *
         * @return string
         */
        public final function get_message()
        {
        }
        /**
         * Get error status code
         *
         * @since 2.9.16
         *
         * @return int
         */
        public final function get_status_code()
        {
        }
    }
}
namespace WeDevs\Dokan {
    /**
     * Fake Mailer Class
     *
     * @since 3.8.0 Moved this class from includes/wc-functions.php file
     */
    class FakeMailer
    {
        public function Send()
        {
        }
    }
}
namespace WeDevs\Dokan\Frontend {
    /**
     * Frontend Manager
     *
     * @since 3.7.21
     *
     * @property BecomeAVendor $become_a_vendor Instance of Commission class
     */
    class Frontend
    {
        use \WeDevs\Dokan\Traits\ChainableContainer;
        /**
         * Shortcodes container
         *
         * @since 3.7.21
         */
        public function __construct()
        {
        }
        /**
         * Set controllers
         *
         * @since 3.7.21
         *
         * @return void
         */
        private function set_controllers()
        {
        }
    }
}
namespace WeDevs\Dokan\Frontend\MyAccount {
    /**
     * Dokan Become Vendor Class.
     *
     * @since   3.7.21
     *
     * @package dokan
     */
    class BecomeAVendor
    {
        /**
         * Class Constructor.
         *
         * @since 3.7.21
         */
        public function __construct()
        {
        }
        /**
         * Init Hooks Method.
         *
         * @since 3.7.21
         *
         * @return void
         */
        public function init_hooks()
        {
        }
        /**
         * Remove Account Update Feature from Dokan Pro.
         *
         * @since 3.7.21
         *
         * @return void
         */
        public function remove_account_update_feature_from_dokan_pro()
        {
        }
        /**
         * Become A Seller Form Handler.
         *
         * @since 3.7.21
         *
         * @return void
         */
        public function become_a_seller_form_handler()
        {
        }
        /**
         * Render Become A Vendor Section.
         *
         * @since 3.7.21
         *
         * @return void
         */
        public function render_become_a_vendor_section()
        {
        }
        /**
         * Load Customer to Vendor Update Form Template.
         *
         * @since 3.7.21
         *
         * @return void
         */
        public function load_customer_to_vendor_update_template()
        {
        }
    }
}
namespace WeDevs\Dokan\Install {
    /**
     * Dokan installer class
     *
     * @author weDevs
     */
    class Installer
    {
        public function do_install()
        {
        }
        /**
         * Add store name meta key for admin users
         *
         * Since we are assuming admin/shop_manager users as vendors by default, and since dokan_store_name meta key is used for
         * various sql queries, we are assigning dokan_store_name meta key for admin users as well.
         *
         * @since 3.7.18
         *
         * @return void
         */
        public function add_store_name_meta_key_for_admin_users()
        {
        }
        /**
         * Schedule cron jobs
         *
         * @since 3.9.2
         *
         * @return void
         */
        private function schedule_cron_jobs()
        {
        }
        /**
         * Adds plugin installation time.
         *
         * @since 3.3.1
         *
         * @return boolean
         */
        public function add_version_info()
        {
        }
        /**
         * Update WooCommerce mayaccount registration settings
         *
         * @since 1.0
         *
         * @return void
         */
        public function woocommerce_settings()
        {
        }
        /**
         * Update product new style options
         *
         * When user first install this plugin
         * the new product style options changed to new
         *
         * @since 2.3
         *
         * @return void
         */
        public function product_design()
        {
        }
        /**
         * Init dokan user roles
         *
         * @since Dokan 1.0
         *
         * @global WP_Roles $wp_roles
         */
        public function user_roles()
        {
        }
        /**
         * Setup all pages for dokan
         *
         * @return void
         */
        public function setup_pages()
        {
        }
        public function create_page($page)
        {
        }
        /**
         * Create necessary tables
         *
         * @since 1.4
         *
         * @return void
         */
        public function create_tables()
        {
        }
        /**
         * Create withdraw table
         *
         * @return void
         */
        public function create_withdraw_table()
        {
        }
        /**
         * Create order sync table
         *
         * @return void
         */
        public function create_sync_table()
        {
        }
        /**
         * Create Announcement table
         *
         * @since  2.1
         *
         * @return void
         */
        public function create_announcement_table()
        {
        }
        /**
         * Add new table for refund request
         *
         * @since 2.4.11
         *
         * @return void
         */
        public function create_refund_table()
        {
        }
        /**
         * Create vendor-balance table
         *
         * @return void
         */
        public function create_vendor_balance_table()
        {
        }
        /**
         * Create Reverse Withdrawal Table
         *
         * @since 3.5.1
         *
         * @return void
         */
        private function create_reverse_withdrawal_table()
        {
        }
        /**
         * This method will create reverse withdrawal base product
         *
         * @since 3.5.1
         *
         * @return void
         */
        private function create_reverse_withdrawal_base_product()
        {
        }
        /**
         * Show plugin changes from upgrade notice
         *
         * @since 2.5.8
         */
        public static function in_plugin_update_message($args)
        {
        }
        /**
         * Parse upgrade notice from readme.txt file.
         *
         * @since 2.5.8
         *
         * @param string $content
         * @param string $new_version
         *
         * @return string
         */
        private static function parse_update_notice($content, $new_version)
        {
        }
    }
}
namespace WeDevs\Dokan\Order\Admin {
    /**
     * Order admin related hooks
     *
     * @since 3.8.0 moved functionality from includes/Admin/Hooks.php file
     */
    class Hooks
    {
        /**
         * Class constructor
         *
         * @since 3.8.0
         */
        public function __construct()
        {
        }
        /**
         * Remove child orders from WC reports
         *
         * @since 3.8.0 Moved from includes/Admin/Hooks.php file
         *
         * @param array $query
         *
         * @return array
         */
        public function admin_order_reports_remove_parents($query)
        {
        }
        /**
         * Change the columns shown in admin.
         *
         * @since 3.8.0 Moved from includes/Admin/Hooks.php file
         * @since 3.8.0 Rewritten for HPOS
         *
         * @param array $existing_columns
         *
         * @return array
         */
        public function admin_shop_order_edit_columns($existing_columns)
        {
        }
        /**
         * Adds custom column on dokan admin shop order table
         *
         * @since 3.8.0 Moved from includes/Admin/Hooks.php file
         * @since 3.8.0 Rewritten for HPOS
         *
         * @param string       $col
         * @param int|WC_Order $post_id
         *
         * @return void
         */
        public function shop_order_custom_columns($col, $post_id)
        {
        }
        /**
         * Adds css classes on admin shop order table
         *
         * @since 3.8.0 Moved from includes/Admin/Hooks.php file
         * @since 3.8.0 Rewritten for HPOS
         *
         * @param string[] $classes An array of post class names.
         * @param string[] $class   An array of additional class names added to the post.
         * @param int      $post_id The post ID.
         *
         * @global WP_Post $post
         *
         * @return array
         */
        public function admin_shop_order_row_classes($classes, $class, $post_id)
        {
        }
        /**
         * Show/hide sub order css/js
         *
         * @since 3.8.0 Moved from includes/Admin/Hooks.php file
         * @since 3.8.0 Added HPOS support
         *
         * @return void
         */
        public function admin_shop_order_scripts()
        {
        }
        /**
         * Change order item display meta key.
         *
         * @since DOKAN_LITE_SINCE
         * @since 3.8.0 Moved this method from Order/Hooks.php file
         *
         * @param string $display_key
         *
         * @return string
         */
        public function change_order_item_display_meta_key($display_key)
        {
        }
        /**
         * Change order item display meta value.
         *
         * @since DOKAN_LITE_SINCE
         * @since 3.8.0 Moved this method from Order/Hooks.php file
         *
         * @param string $display_value
         * @param object $meta
         *
         * @return string
         */
        public function change_order_item_display_meta_value($display_value, $meta)
        {
        }
        /**
         * Delete sub orders when parent order is trashed
         *
         * @since 3.8.0 Moved from includes/Admin/Hooks.php file
         * @since 3.8.0 Rewritten for HPOS
         *
         * @param int $post_id
         */
        public function admin_on_trash_order($post_id)
        {
        }
        /**
         * Un-trash sub orders when parent orders are un-trashed
         *
         * @since 3.8.0 Moved from includes/Admin/Hooks.php file
         * @since 3.8.0 Rewritten for HPOS
         *
         * @param int $post_id
         *
         * @return void
         */
        public function admin_on_untrash_order($post_id)
        {
        }
        /**
         * Delete sub orders and from dokan sync table when a order is deleted
         *
         * @since 3.8.0 Moved from includes/Admin/Hooks.php file
         * @since 3.8.0 Rewritten for HPOS
         *
         * @param int $post_id
         *
         * @return void
         */
        public function admin_on_delete_order($post_id)
        {
        }
        /**
         * Delete sub orders and from dokan sync table when a order is deleted
         *
         * @since 3.8.0 Moved from includes/Admin/Hooks.php file
         * @since 3.8.0 Rewritten for HPOS
         *
         * @param int $post_id
         *
         * @return void
         */
        public function admin_on_delete_order_post($post_id)
        {
        }
        /**
         * Show a toggle button to toggle all the sub orders
         *
         * @since 3.8.0 Moved from includes/Admin/Hooks.php file
         * @since 3.8.0 Rewritten for HPOS
         *
         * @param string $typenow
         *
         * @return void
         */
        public function admin_shop_order_toggle_sub_orders($typenow)
        {
        }
    }
    /**
     * Handle Admin Order Permission Related Hooks
     *
     * @since 3.8.0
     */
    class Permissions
    {
        /**
         * Class constructor
         *
         * @since 3.8.0
         */
        public function __construct()
        {
        }
        /**
         * Dokan map meta cpas for vendors
         *
         * @since 3.8.0 moved this method from includes/functions.php file
         * @since 3.8.0 Added HPOS support
         *
         * @param array  $caps
         * @param string $cap
         * @param int    $user_id
         * @param array  $args
         *
         * @return array
         */
        public function map_meta_caps($caps, $cap, $user_id, $args)
        {
        }
        /**
         * Filter orders of current user
         *
         * @since 3.8.2
         *
         * @param array $args
         *
         * @return array
         */
        public function hpos_filter_orders_for_current_vendor($args)
        {
        }
        /**
         * Filter orders of current user
         *
         * @since 2.9.4
         * @since 3.8.0 Moved this method from includes/functions.php
         * @since 3.8.0 Added HPOS Support
         *
         * @param array  $args
         * @param object $query
         *
         * @return array
         */
        public function filter_orders_for_current_vendor($args, $query)
        {
        }
        /**
         * Revoke vendor access of changing order status in the backend if permission is not given
         *
         * @since 2.8.0
         * @since 3.8.0 Moved this method from includes/functions.php file
         *
         * @return void
         */
        public function revoke_change_order_status()
        {
        }
        /**
         * Revoke vendor access of changing order status in the backend if permission is not given
         *
         * @since 2.8.0
         * @since 3.8.0 Moved this method from includes/functions.php
         *
         * @param array $columns
         *
         * @return array
         */
        public function remove_action_column($columns)
        {
        }
        /**
         * Revoke vendor access of changing order status in the backend if permission is not given
         *
         * @since 2.8.0
         * @since 3.8.0 Moved this method form includes/functions.php file
         *
         * @param array $actions
         *
         * @return array;
         */
        public function remove_action_button($actions)
        {
        }
    }
}
namespace WeDevs\Dokan\Order {
    /**
     * Class Ajax
     *
     * @since 3.10.3
     *
     * @package WeDevs\Dokan\Order
     */
    class Ajax
    {
        /**
         * Class constructor
         *
         * @since 3.10.3
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Search downloadable products
         *
         * @since 3.10.3
         *
         * @return void
         */
        public function search_downloadable_products()
        {
        }
    }
    /**
     * Handle permission related hooks for Orders
     *
     * @since 3.8.0
     */
    class Controller
    {
        use \WeDevs\Dokan\Traits\ChainableContainer;
        /**
         * Class constructor
         *
         * @since 3.8.0
         */
        public function __construct()
        {
        }
        /**
         * Load required classes
         *
         * @return void
         */
        public function init_classes()
        {
        }
    }
    /**
     * Order admin related hooks
     *
     * @since 3.8.0 moved functionality from includes/Admin/Hooks.php file
     */
    class EmailHooks
    {
        /**
         * Class constructor
         *
         * @since 3.8.0
         */
        public function __construct()
        {
        }
        /**
         * Stop sending multiple email for an order
         *
         * @since 2.8.6
         * @since 3.8.0 Moved this method from includes/functions.php file
         *
         * @return void
         */
        public function prevent_sending_multiple_email()
        {
        }
        /**
         * Send email to the vendor/seller when cancel the order
         *
         * @since 3.8.0 Moved this method from includes/wc-functions.php file
         *
         * @param string   $recipient
         * @param WC_Order $order
         *
         * @return string
         */
        public function send_email_for_order_cancellation($recipient, $order)
        {
        }
        /**
         * Add vendor email on customers note mail replay to
         *
         * @since 3.8.0 Moved this method from includes/wc-functions.php file
         *
         * @param string   $headers
         * @param string   $id
         * @param WC_Order $order
         *
         * @return string $headers
         */
        public function add_reply_to_vendor_email_on_wc_customer_note_mail($headers, $id, $order)
        {
        }
        /**
         * Exclude child order emails for customers
         *
         * A hacky and dirty way to do this from this action. Because there is no easy
         * way to do this by removing action hooks from WooCommerce. It would be easier
         * if they were from functions. Because they are added from classes, we can't
         * remove those action hooks. That's why we are doing this from the phpmailer_init action
         * by returning a fake phpmailer class.
         *
         * @since 3.8.0 Moved this method from includes/wc-functions.php file
         *
         * @param \PHPMailer $phpmailer
         *
         * @return void
         */
        public function exclude_child_customer_receipt($phpmailer)
        {
        }
    }
}
namespace WeDevs\Dokan\Order\Frontend {
    /**
     * Order Frontend Hooks
     *
     * @since 3.8.0
     */
    class Hooks
    {
        /**
         * Class constructor
         *
         * @since 3.8.0
         */
        public function __construct()
        {
        }
        /**
         * Change bulk order status in vendor dashboard
         *
         * @since 2.8.3
         * @since 3.8.0 Moved this method from includes/wc-functions.php file
         *
         * @return void
         */
        public function bulk_order_status_change()
        {
        }
    }
}
namespace WeDevs\Dokan\Order {
    /**
     * Admin Hooks
     *
     * @since   3.0.0
     *
     * @package dokan
     *
     * @author  weDevs
     */
    class Hooks
    {
        /**
         * Load automatically when class initiate
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Update the child order status when a parent order status is changed
         *
         * @param int      $order_id
         * @param string   $old_status
         * @param string   $new_status
         * @param WC_Order $order
         *
         * @return void
         */
        public function on_order_status_change($order_id, $old_status, $new_status, $order)
        {
        }
        /**
         * If order status is set to refunded from vendor dashboard, enter remaining balance into vendor balance table.
         *
         * @since 3.8.0 Created this method from on_order_status_change()
         *
         * @param int      $order_id
         * @param string   $old_status
         * @param string   $new_status
         * @param WC_Order $order
         *
         * @return void
         */
        public function manage_refunded_for_order($order_id, $old_status, $new_status, $order)
        {
        }
        /**
         * Mark the parent order as complete when all the child order are completed
         *
         * @param integer  $order_id
         * @param string   $old_status
         * @param string   $new_status
         * @param WC_Order $order
         *
         * @return void
         */
        public function on_sub_order_change($order_id, $old_status, $new_status, $order)
        {
        }
        /**
         * Split order for vendor
         *
         * @since 3.0.0
         *
         * @param $parent_order_id
         *
         * @return void
         */
        public function split_vendor_orders($parent_order_id)
        {
        }
        /**
         * Ensure vendor coupon
         *
         * For consistency, restrict coupons in cart if only
         * products from that vendor exists in the cart. Also, a coupon
         * should be restricted with a product.
         *
         * For example: When entering a coupon created by admin is applied, make
         * sure a product of the admin is in the cart. Otherwise it wouldn't be
         * possible to distribute the coupon in sub orders.
         *
         * @param boolean       $valid
         * @param \WC_Coupon    $coupon
         * @param \WC_Discounts $discount
         *
         * @throws Exception
         * @return boolean|Exception
         */
        public function ensure_vendor_coupon($valid, $coupon, $discount)
        {
        }
        /**
         * Restore order stock if it's been reduced by twice
         *
         * @param WC_Order $order
         *
         * @return void
         */
        public function restore_reduced_order_stock($order)
        {
        }
        /**
         * Handle stock level wrong calculation in order notes for suborder
         *
         * @since 3.8.3
         *
         * @param WC_Order $order
         *
         * @return void
         */
        public function handle_order_notes_for_suborder($order)
        {
        }
        /**
         * PDF Invoices & Packing Slips for WooCommerce plugin integration on suborder section.
         *
         * @since 3.8.3
         *
         * @param $actions
         * @param $order
         *
         * @return mixed
         */
        public function suborder_pdf_invoice_button($actions, $order)
        {
        }
    }
    /**
     * Order Management API
     *
     * @since 2.8
     * @since 3.8.0 added HPOS support
     */
    class Manager
    {
        /**
         * Get all orders
         *
         * @since 3.0.0
         * @since 3.6.3 rewritten to include filters
         * @since 3.8.0 added HPOS support
         *
         * @return WP_Error|int[]|WC_Order[]
         */
        public function all($args = [])
        {
        }
        /**
         * Get backward compatibility args
         *
         * @since 3.8.0
         *
         * @param array $args
         *
         * @return array
         */
        protected function get_backward_compatibility_args($args = [])
        {
        }
        /**
         * Get single order details
         *
         * @since 3.0.0
         *
         * @return bool|WC_Order|WC_Order_Refund
         */
        public function get($id)
        {
        }
        /**
         * Count orders for a seller
         *
         * @since 3.8.0 moved this function from functions.php file
         *
         * @param int $seller_id
         *
         * @return array
         */
        public function count_orders($seller_id)
        {
        }
        /**
         * Check if an order with same id is exists in database
         *
         * @since 3.8.0
         *
         * @param int|WC_Order $order_id
         *
         * @return boolean
         */
        public function is_order_already_synced($order_id)
        {
        }
        /**
         * Check if order is belonged to given seller
         *
         * @since 3.8.0
         *
         * @param int $seller_id
         * @param int $order_id
         *
         * @return bool
         */
        public function is_seller_has_order($seller_id, $order_id)
        {
        }
        /**
         * Get order of current logged-in users or by given customer id
         *
         * @since 3.8.0
         *
         * @param array $args
         *
         * @return \stdClass|WC_Order[]|int[]
         */
        public function get_customer_orders($args)
        {
        }
        /**
         * Get Customer Order IDs by Seller
         *
         * @since 3.8.0
         *
         * @param int $customer_id
         * @param int $seller_id
         *
         * @return int[]|null on failure
         */
        public function get_customer_order_ids_by_seller($customer_id, $seller_id)
        {
        }
        /**
         * @param int|WC_Order $parent_order
         *
         * @return WC_Order[]
         */
        public function get_child_orders($parent_order)
        {
        }
        /**
         * Delete dokan order
         *
         * @since 3.8.0
         *
         * @param int      $order_id
         * @param int|null $seller_id
         *
         * @return void
         */
        public function delete_seller_order($order_id, $seller_id = null)
        {
        }
        /**
         * Delete dokan order with suborders
         *
         * @since 3.8.0
         *
         * @param int $order_id
         *
         * @return void
         */
        public function delete_seller_order_with_suborders($order_id)
        {
        }
        /**
         * Creates a sub order
         *
         * @param WC_Order $parent_order
         * @param integer  $seller_id
         * @param array    $seller_products
         *
         * @return void|WP_Error
         */
        public function create_sub_order($parent_order, $seller_id, $seller_products)
        {
        }
        /**
         * Create line items for order
         *
         * @param object $order wc_get_order
         * @param array  $products
         *
         * @return void
         */
        private function create_line_items($order, $products)
        {
        }
        /**
         * Create tax line items
         *
         * @param WC_Order $order
         * @param WC_Order $parent_order
         * @param array    $products
         *
         * @return void
         */
        private function create_taxes($order, $parent_order, $products)
        {
        }
        /**
         * Create shipping for a sub-order if neccessary
         *
         * @param WC_Order $order
         * @param WC_Order $parent_order
         *
         * @return void
         */
        private function create_shipping($order, $parent_order)
        {
        }
        /**
         * Create coupons for a sub-order if necessary
         *
         * @param WC_Order $order
         * @param WC_Order $parent_order
         * @param array    $products
         *
         * @return void
         */
        private function create_coupons($order, $parent_order, $products)
        {
        }
        /**
         * Monitors a new order and attempts to create sub-orders
         *
         * If an order contains products from multiple vendor, we can't show the order
         * to each seller dashboard. That's why we need to divide the main order to
         * some sub-orders based on the number of sellers.
         *
         * @since 3.8.0 added $force_create parameter
         *
         * @param bool $force_create if this parameter is true, if suborder is already created, they'd be deleted first
         *
         * @param int  $parent_order_id
         *
         * @return void
         */
        public function maybe_split_orders($parent_order_id, $force_create = false)
        {
        }
        /**
         * This will check if given var is empty or not.
         *
         * @since 3.6.3
         *
         * @param mixed $item
         *
         * @return bool
         */
        protected function is_empty($item)
        {
        }
    }
    /**
     * Order admin related hooks
     *
     * @since 3.8.0 moved functionality from includes/Admin/Hooks.php file
     */
    class MiscHooks
    {
        /**
         * Class constructor
         *
         * @since 3.8.0
         */
        public function __construct()
        {
        }
        /**
         * Delete_child_order_from_wc_order_product
         *
         * @since 3.8.0 Moved this method from Order/Hooks.php file
         *
         * @param \ActionScheduler_Action $args
         *
         * @return void
         */
        public function delete_child_order_from_wc_order_product($args)
        {
        }
        /**
         * Trim child order if parent exist from wc_order_product_lookup for analytics order
         *
         * @since 3.8.0 Moved this method from Order/Hooks.php file
         *
         * @param WC_Order $orders
         *
         * @return WC_Order
         */
        public function trim_child_order_for_analytics_order($orders)
        {
        }
        /**
         * Remove customer sensitive information while exporting order
         *
         * @since 3.8.0 Moved this method from Order/Hooks.php file
         *
         * @param array $headers
         *
         * @return mixed
         */
        public function hide_customer_info_from_vendor_order_export($headers)
        {
        }
        /**
         * Add vendor info in restful wc_order
         *
         * @since 3.8.0 Moved this method from includes/functions.php file
         *
         * @param WP_REST_Response $response
         *
         * @return WP_REST_Response
         */
        public function add_vendor_info_in_rest_order($response)
        {
        }
        /**
         * Modify order counts for vendor.
         *
         * @since 3.8.0 Moved this method from includes/wc-functions.php file
         *
         * @param object $counts
         *
         * @return object $counts
         */
        public function modify_vendor_order_counts($counts)
        {
        }
        /**
         * Exclude suborders and include dokan subscription product orders when generate woocommerce analytics data.
         *
         * @see https://github.com/getdokan/dokan-pro/issues/2735
         *
         * @param array     $data
         * @param \WC_Order $order
         *
         * @return array
         */
        public function trim_child_order_for_analytics_order_stats($data, $order)
        {
        }
    }
    /**
     * Order Cache class.
     *
     * Manage all caches for order related functionalities.
     *
     * @since 3.3.2
     *
     * @see   \WeDevs\Dokan\Cache
     */
    class OrderCache
    {
        public function __construct()
        {
        }
        /**
         * Delete order cache
         *
         * @since 3.3.2
         *
         * @param int      $seller_id
         * @param int|null $order_id
         *
         * @return void
         */
        public static function delete($seller_id, $order_id = null)
        {
        }
        /**
         * Reset cache group related to seller orders.
         *
         * @since 3.3.2
         *
         * @param int $order_id
         * @param int $seller_id
         *
         * @return void
         */
        public function reset_seller_order_data($order_id, $seller_id)
        {
        }
        /**
         * Reset cache data on update WooCommerce order.
         *
         * @since 3.3.2
         *
         * @param int $order_id
         *
         * @return void
         */
        public function reset_order_cache($order_id)
        {
        }
        /**
         * Reset cache data on deleting WooCommerce order.
         *
         * @since 3.3.2
         *
         * @param int $order_id
         *
         * @return void
         */
        public function reset_cache_before_deleting_order($order_id)
        {
        }
        /**
         * This method will delete vendors best-selling product cache after a new order has been made
         *
         * @since 3.2.11
         * @since 3.8.0 Moved this function from includes/wc-functions.php
         *
         * @param int $post_id
         */
        public function clear_product_cache($order_id)
        {
        }
    }
}
namespace WeDevs\Dokan {
    /**
     * Pageviews - for counting product post views.
     */
    class PageViews
    {
        private $meta_key = 'pageview';
        public function __construct()
        {
        }
        public function load_scripts()
        {
        }
        public function load_views()
        {
        }
        public function update_view($post_id = '')
        {
        }
        public function update_ajax()
        {
        }
    }
    /**
     * Dokan_Privacy Class.
     */
    class Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Init - hook into events.
         */
        public function __construct()
        {
        }
        /**
         * Add privacy policy content for the privacy policy page.
         *
         * @since 3.4.0
         */
        public function get_privacy_message()
        {
        }
        /**
         * Handle some custom types of data and anonymize them.
         *
         * @param string $anonymous anonymized string
         * @param string $type      type of data
         * @param string $data      the data being anonymized
         *
         * @return string anonymized string
         */
        public function anonymize_custom_data_types($anonymous, $type, $data)
        {
        }
        /**
         * Export vendor personal data
         *
         * @since 2.8.2
         *
         * @return void
         */
        public function vendor_data_exporter($email_address, $page)
        {
        }
        /**
         * Get vendor pers
         *
         * @since 2.8.2
         *
         * @return void
         */
        public function get_vendor_personal_data($user)
        {
        }
        /**
         * Vendor Data Eraser.
         *
         * @since 2.8.2
         *
         * @return array
         */
        public function vendor_data_eraser($email_address, $page)
        {
        }
        /**
         * Errase array data
         *
         * @since 2.8.2
         *
         * @param array
         *
         * @return array
         */
        public function erase_array_data(&$data)
        {
        }
    }
}
namespace WeDevs\Dokan\Product {
    /**
     * Admin Hooks
     *
     * @since   3.0.0
     *
     * @package dokan
     */
    class Hooks
    {
        /**
         * Load autometically when class initiate
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Callback for Ajax Action Initialization
         *
         * @since DOKAN_LITE_SINCE
         * @return void
         */
        public function store_product_search_action()
        {
        }
        /**
         * Output the store product sorting options
         *
         * @since DOKAN_LITE_SINCE
         * @return void
         */
        public function store_products_orderby()
        {
        }
        /**
         * Change bulk product status in vendor dashboard
         *
         * @since 2.8.6
         * @return void
         */
        public function bulk_product_status_change()
        {
        }
        /**
         * Bulk product delete
         *
         * @param string $action
         * @param object $products
         *
         * @return void
         */
        public function bulk_product_delete($action, $products)
        {
        }
        /**
         * Triggers when admin quick edits products or bulk edit products from admin panel.
         * we are auto selecting all category ancestors here.
         *
         * @since 3.6.4
         *
         * @param object $product
         *
         * @return void
         */
        public function update_category_data_for_bulk_and_quick_edit($product)
        {
        }
        /**
         * Triggers when admin saves/edits products.
         * we are auto selecting all category ancestors here.
         *
         * @since 3.6.4
         *
         * @param int $product_id
         *
         * @return void
         */
        public function update_category_data_for_new_and_update_product($product_id)
        {
        }
        /**
         * Gets chosen categories and updated product categories.
         *
         * @since 3.6.4
         *
         * @param int $product_id
         *
         * @return void
         */
        private function update_product_categories($product_id)
        {
        }
        /**
         * Set product edit status
         *
         * @since 3.8.2
         *
         * @param int   $product_id
         *
         * @param array $all_statuses
         *
         * @return array
         */
        public function set_product_status($all_statuses, int $product_id)
        {
        }
        /**
         * Set new product email status to false
         *
         * @since 3.8.2
         *
         * @param int|WC_Product $product_id
         *
         * @return void
         */
        public function set_new_product_email_status($product_id)
        {
        }
        /**
         * Remove product type filter if dokan pro does not exist.
         *
         * @since 3.8.2
         *
         * @param array $args
         *
         * @return array
         */
        public function remove_product_type_filter($args)
        {
        }
        /**
         * Display own product not punchable notice.
         *
         * @since 3.9.2
         *
         * @return void
         */
        public function own_product_not_purchasable_notice()
        {
        }
        /**
         * Filter the recipients of the product review notification.
         *
         * Right now, if someone leaves a review for a vendor product, the vendor is receiving a notification email.
         * This email notification should be sent to the admin instead of the vendor.
         *
         * @since 3.9.2
         *
         * @param array $emails
         * @param int   $comment_id
         *
         * @return array
         */
        public function product_review_notification_recipients($emails, $comment_id)
        {
        }
    }
    /**
     * Product manager Class
     *
     * @since 3.0.0
     */
    class Manager
    {
        /**
         * Get all Product for a vendor
         *
         * @since 1.0.0
         *
         * @return \WP_Post[]
         */
        public function all($args = [])
        {
        }
        /**
         * Get single product
         *
         * @since 3.0.0
         *
         * @return WC_Product|null|false
         */
        public function get($product_id)
        {
        }
        /**
         * Save Product
         *
         * @since 3.0.0
         *
         * @throws \WC_Data_Exception
         * @return WC_Product|null|false
         */
        public function create($args = [])
        {
        }
        /**
         * Save default attributes.
         *
         * @since 3.0.0
         *
         * @param WC_Product      $product Product instance.
         * @param \WP_REST_Request $request Request data.
         *
         * @return WC_Product
         */
        public function save_default_attributes($product, $request)
        {
        }
        /**
         * Update product data
         *
         * @since 3.0.0
         *
         * @return WC_Product|WP_Error|false
         */
        public function update($args = [])
        {
        }
        /**
         * Delete product data
         *
         * @since 3.0.0
         *
         * @return WC_Product|null|false
         */
        public function delete($product_id, $force = false)
        {
        }
        /**
         * Save product shipping data.
         *
         * @param WC_Product $product Product instance.
         * @param array      $data    Shipping data.
         *
         * @return WC_Product
         */
        protected function save_product_shipping_data($product, $data)
        {
        }
        /**
         * Save taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param array      $terms    Terms data.
         * @param string     $taxonomy Taxonomy name.
         *
         * @return WC_Product
         */
        protected function save_taxonomy_terms($product, $terms, $taxonomy = 'cat')
        {
        }
        /**
         * Save downloadable files.
         *
         * @param WC_Product $product    Product instance.
         * @param array      $downloads  Downloads data.
         *
         * @return WC_Product
         */
        protected function save_downloadable_files($product, $downloads)
        {
        }
        /**
         * Sync stock stats for variable products.
         *
         * @since 3.4.0
         *
         * @param WC_Product $product
         * @param string     $stock_status
         *
         * @return mixed
         */
        protected function maybe_update_stock_status($product, $stock_status)
        {
        }
        /**
         * Get featured products
         *
         * @since 1.0.0
         *
         * @param array $args
         *
         * @return \WP_Post[]
         */
        public function featured($args = [])
        {
        }
        /**
         * Get latest product
         *
         * @since 1.0.0
         *
         * @param array $args
         *
         * @return \WP_Post[]
         */
        public function latest($args = [])
        {
        }
        /**
         * Best Selling Products
         *
         * @since 3.0.0
         *
         * @param array $args
         *
         * @return \WP_Post[]
         */
        public function best_selling($args = [])
        {
        }
        /**
         * Top-rated product
         *
         * @since 3.0.0
         *
         * @param array $args
         *
         * @return \WP_Post[]
         */
        public function top_rated($args = [])
        {
        }
    }
    /**
    * Manage Product Attributes.
    *
    * @package dokan
    *
    * @since 3.7.10
    */
    class ProductAttribute
    {
        /**
         * Request attributes.
         *
         * @since 3.7.10
         *
         * @var array
         */
        public $request_attributes;
        /**
         * Class constructor.
         *
         * @since 3.7.10
         *
         * @param array $attrs
         */
        public function __construct($attrs = null)
        {
        }
        /**
         * Set request attributes.
         *
         * @since 3.7.10
         *
         * @param array $attrs
         *
         * @return self
         */
        public function set_request_attributes($attrs = [])
        {
        }
        /**
         * Get product attributes by product id.
         *
         * @since 3.7.10
         *
         * @param int    $post_id
         * @return array $product_attributes
         */
        public function get($post_id)
        {
        }
        /**
         * Set and save product attributes.
         *
         * @since 3.7.10
         *
         * @param WC_Product $product
         * @param boolean    $needs_save
         *
         * @example $request_attributes
         * ```
         * $request_attributes = [
         *   {
         *     "id": 6,
         *     "name": "Color",
         *     "position": 0,
         *     "visible": false,
         *     "variation": true,
         *     "options": [
         *       "Black",
         *       "Green"
         *     ]
         *   },
         *   {
         *     "name": "Custom Attribute",
         *     "position": 1,
         *     "visible": true,
         *     "variation": false,
         *     "options": [
         *       "Value 1",
         *       "Value 2"
         *     ]
         *   },
         * ]
         *
         * @return WC_Product|boolean
         */
        public function set(&$product, $needs_save = false)
        {
        }
        /**
         * Set default attribute for product.
         *
         * @since 3.7.10
         *
         * @param WC_Product $product
         * @param boolean    $needs_save
         *
         * @return WC_Product|boolean
         */
        public function set_default(&$product, $needs_save = false)
        {
        }
    }
    /**
     * Product Cache class.
     *
     * Manage all caches for products.
     *
     * @since 3.3.2
     *
     * @see \WeDevs\Dokan\Cache
     */
    class ProductCache
    {
        public function __construct()
        {
        }
        /**
         * Reset cache group related to seller products.
         *
         * @since 3.3.2
         *
         * @param int|\WC_Product $product
         *
         * @return void
         */
        public function clear_seller_product_caches($product)
        {
        }
        /**
         * Delete cache group related to seller products.
         *
         * @since 3.3.2
         *
         * @param int $seller_id
         *
         * @return void
         */
        public static function delete($seller_id)
        {
        }
        /**
         * Clear Single Product Caches.
         *
         * We'll be calling `WC_Product_Data_Store_CPT::clear_caches()` to clear product caches.
         *
         * @since 3.3.2
         *
         * @param int|\WC_Product $product
         *
         * @return void
         */
        public function clear_single_product_caches($product)
        {
        }
        /**
         * Clear Single Product taxonomy Caches.
         *
         * @since 3.5.0
         *
         * @param int|\WC_Product $product
         *
         * @return void
         */
        public function clear_single_product_taxonomy_caches($product)
        {
        }
        /**
         * Clear Cache on bulk product status change.
         *
         * @since 3.3.2
         *
         * @param  string $status
         * @param  array  $products
         *
         * @return void
         */
        public function cache_clear_bulk_product_status_change($status, $products)
        {
        }
    }
    /**
     * Vendor information handler class
     */
    class VendorStoreInfo
    {
        /**
         * Class constructor
         *
         * @since 3.3.7
         */
        public function __construct()
        {
        }
        /**
         * Display seller info on product single page
         *
         * @since 3.3.7
         *
         * @return void
         */
        public function add_vendor_info_on_product_single_page()
        {
        }
        /**
         * Add setting fields for seller information
         *
         * @param array $settings_fields
         *
         * @param object $dokan_settings
         *
         * @return array
         */
        public function admin_settings_for_vendor_info($settings_fields, $dokan_settings)
        {
        }
    }
}
namespace WeDevs\Dokan\ProductCategory {
    class Categories
    {
        /**
         * @var array
         *
         * @since 3.6.2
         */
        private $categories = [];
        /**
         * This method will return all the categories
         *
         * @since 3.6.4
         *
         * @return void|array
         */
        public function get_all_categories($ret = false)
        {
        }
        /**
         * This method will return category data
         *
         * @sience 3.6.2
         *
         * @return array
         */
        public function get()
        {
        }
        /**
         * Sets categories.
         *
         * @since 3.7.0
         *
         * @param array $categories
         *
         * @return void
         */
        public function set_categories($categories = [])
        {
        }
        /**
         * Get Children of a parent category
         *
         * @since 3.6.4
         *
         * @param int $parent_id
         *
         * @return int[]
         */
        public function get_children($parent_id)
        {
        }
        /**
         * Get all the parents of a category.
         *
         * @since 3.6.4
         *
         * @param int $category_id
         *
         * @return array
         */
        public function get_parents($category_id)
        {
        }
        /**
         * Returns the top patent id of a category.
         *
         * @since 3.6.4
         *
         * @param int $category_id
         *
         * @return int
         */
        public function get_topmost_parent($category_id)
        {
        }
        /**
         * This method will prepare category data
         *
         * @since 3.6.2
         *
         * @return void
         */
        private function get_categories()
        {
        }
        /**
         * This method will recursively get parent id of a category
         *
         * @sience 3.6.2
         *
         * @param int $current_item
         *
         * @return void
         */
        private function recursively_get_parent_categories($current_item)
        {
        }
    }
    /**
     * Product category helper class.
     *
     * @since 3.6.2
     */
    class Helper
    {
        /**
         * Returns 'true' if category type selection for Products is single, 'false' if type is multiple
         *
         * @since 3.6.2
         *
         * @return boolean
         */
        public static function product_category_selection_is_single()
        {
        }
        /**
         * Returns 'true' if select any category option is turned on.
         *
         * @since 3.7.15
         *
         * @return boolean
         */
        public static function is_any_category_selection_enabled()
        {
        }
        /**
         * Returns products category.
         *
         * @since 3.6.2
         *
         * @param integer $post_id
         * @param boolean $get_default_cat
         *
         * @return array
         */
        public static function get_saved_products_category($post_id = 0, $get_default_cat = true)
        {
        }
        /**
         * Fotomat's chosen cates for generate chosen cats.
         *
         * @since 3.7.0
         *
         * @param  array $all_children
         * @param  array $all_ancestors
         *
         * @return array
         */
        private static function get_formatted_chosen_cat($all_children, $all_ancestors)
        {
        }
        /**
         * Generates chosen categories from categories/terms array
         *
         * @since 3.6.4
         *
         * @param object $terms
         *
         * @return array
         */
        public static function generate_chosen_categories($terms)
        {
        }
        /**
         * Set all ancestors to a product from chosen product categories
         *
         * @since 3.6.2
         *
         * @param int $post_id
         * @param array $chosen_categories
         *
         * @return void
         */
        public static function set_object_terms_from_chosen_categories($post_id, $chosen_categories = [])
        {
        }
        /**
         * Get category ancestors HTML;
         *
         * @since 3.6.2
         *
         * @param integer $term
         *
         * @return string
         */
        public static function get_ancestors_html($term)
        {
        }
        /**
         * Enqueue styles and scripts and localize for dokan multi-step category.
         *
         * @since 3.7.0
         *
         * @return void
         */
        public static function enqueue_and_localize_dokan_multistep_category()
        {
        }
        /**
         * Returns the chosen category of a product.
         *
         * @since 3.7.0
         *
         * @param int $product_id
         *
         * @return array
         */
        public static function get_product_chosen_category($product_id)
        {
        }
        /**
         * Generates and sets products categories.
         *
         * @since 3.7.16
         *
         * @param int $product_id
         *
         * @return array $chosen_categories
         */
        public static function generate_and_set_chosen_categories($product_id, $chosen_categories = [])
        {
        }
    }
    /**
     * Hooks class for product categories.
     *
     * @since 3.6.2
     */
    class Hooks
    {
        /**
         * Class constructor.
         *
         * @since 3.6.2
         */
        public function __construct()
        {
        }
        /**
         * Delete all references for chosen_product_cat with category id under postmeta table.
         *
         * @since 3.6.2
         *
         * @param array $results
         *
         * @return void
         */
        public function delete_reference_category_from_chosen_cat($results = [])
        {
        }
        /**
         * Add categories to action scheduler queue to delete the chosen cat reference from post meta.
         *
         * @param int $category_id
         *
         * @since 3.6.2
         *
         * @return void
         */
        public function add_chosen_categories_to_action_queue($category_id)
        {
        }
    }
    /**
     * Product category Cache class.
     *
     * Manage all caches for product category related functionalities.
     *
     * @since 3.6.2
     *
     * @see \WeDevs\Dokan\Cache
     */
    class ProductCategoryCache
    {
        public function __construct()
        {
        }
        /**
         * Delete product category cache
         *
         * @since 3.6.2
         *
         * @return void
         */
        public function clear_multistep_category_cache()
        {
        }
        /**
         * This method will delete store category cache after a category is updated
         *
         * @since 3.2.10
         * @since 3.8.0 Moved this method from includes/wc-functions.php file
         *
         * @param int $term_id
         */
        public function clear_product_category_cache($term_id)
        {
        }
    }
}
namespace WeDevs\Dokan\ProductSections {
    /**
     * Single store products class.
     *
     * For displaying additional products sections to single store page.
     *
     * @since 3.3.7
     *
     * @package dokan
     */
    abstract class AbstractProductSection
    {
        /**
         * Unique section id.
         *
         * @since 3.3.7
         *
         * @var string
         */
        protected $section_id;
        /**
         * Show this section under customizer.
         *
         * @since 3.3.7
         *
         * @var bool
         */
        protected $show_in_customizer = true;
        /**
         * Products to display in this sections.
         *
         * @since 3.3.7
         *
         * @var int
         */
        protected $item_count = 3;
        /**
         * AbstractProductSection constructor.
         *
         * @since 3.3.7
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Set unique section id for the this section.
         *
         * @since 3.3.7
         *
         * @return void
         */
        protected abstract function set_section_id();
        /**
         * Get single store page section title.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public abstract function get_section_title();
        /**
         * Get label for this section.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public abstract function get_section_label();
        /**
         * Get products for this section
         *
         * @since 3.3.7
         *
         * @return \WP_Query
         */
        public abstract function get_products($vendor_id);
        /**
         * Get unique section id for this section.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public function get_section_id()
        {
        }
        /**
         * Set if need admin customizer settings for this section or not.
         *
         * @since 3.3.7
         *
         * @return void
         */
        public function set_show_in_customizer($value)
        {
        }
        /**
         * Check if admin customizer settings is enabled for this section or not.
         *
         * @since 3.3.7
         *
         * @return bool
         */
        public function get_show_in_customizer()
        {
        }
        /**
         * Check products block visibility settings by admin and vendor.
         *
         * @since 3.3.7
         *
         * @return bool
         */
        public function is_enabled()
        {
        }
    }
    /**
     * Best Selling products section class.
     *
     * For displaying best selling products section to single store page.
     *
     * @since 3.3.7
     *
     * @package dokan
     */
    class BestSelling extends \WeDevs\Dokan\ProductSections\AbstractProductSection
    {
        /**
         * Set unique section id for the this section.
         *
         * @since 3.3.7
         *
         * @return void
         */
        protected function set_section_id()
        {
        }
        /**
         * Get single store page section title.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public function get_section_title()
        {
        }
        /**
         * Get label for this section.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public function get_section_label()
        {
        }
        /**
         * Get section products.
         *
         * @since 3.3.7
         *
         * @return \WP_Query
         */
        public function get_products($vendor_id)
        {
        }
    }
    /**
     * Featured products section class.
     *
     * For displaying featured products section to single store page.
     *
     * @since 3.3.7
     *
     * @package dokan
     */
    class Featured extends \WeDevs\Dokan\ProductSections\AbstractProductSection
    {
        /**
         * Set unique section id for the this section.
         *
         * @since 3.3.7
         *
         * @return void
         */
        protected function set_section_id()
        {
        }
        /**
         * Get single store page section title.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public function get_section_title()
        {
        }
        /**
         * Get label for this section.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public function get_section_label()
        {
        }
        /**
         * Get section products.
         *
         * @since 3.3.7
         *
         * @return \WP_Query
         */
        public function get_products($vendor_id)
        {
        }
    }
    /**
     * Latest products section class.
     *
     * For displaying latest products section to single store page.
     *
     * @since 3.3.7
     *
     * @package dokan
     */
    class Latest extends \WeDevs\Dokan\ProductSections\AbstractProductSection
    {
        /**
         * Set unique section id for the this section.
         *
         * @since 3.3.7
         *
         * @return void
         */
        protected function set_section_id()
        {
        }
        /**
         * Get single store page section title.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public function get_section_title()
        {
        }
        /**
         * Get label for this section.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public function get_section_label()
        {
        }
        /**
         * Get section products.
         *
         * @since 3.3.7
         *
         * @return \WP_Query
         */
        public function get_products($vendor_id)
        {
        }
    }
    /**
     * Dokan store products section manager class
     *
     * @since 3.3.7
     */
    class Manager
    {
        use \Wedevs\Dokan\Traits\ChainableContainer;
        /**
         * Class constructor
         *
         * @since 3.3.7
         */
        public function __construct()
        {
        }
        /**
         * Register all products section classes to chainable container
         *
         * @since 3.3.7
         *
         * @return void
         */
        public function init_classes()
        {
        }
        /**
         * Init required hooks
         *
         * @since 3.3.7
         *
         * @return void
         */
        public function init_hooks()
        {
        }
        /**
         * Render customizer settings fields.
         *
         * @since 3.3.7
         *
         * @param object $wp_customize
         *
         * @return void
         */
        public function render_customizer_settings_fields($wp_customize)
        {
        }
        /**
         * Render additional products section.
         *
         * @since 3.3.7
         *
         * @param \WP_User $store_user Store user data
         * @param array  $store_info Store info data
         * @param Vendor $vendor Vendor class instance
         *
         * @return void
         */
        public function render_additional_product_sections($store_user)
        {
        }
        /**
         * Get available product sections
         *
         * @since 3.3.7
         *
         * @return array
         */
        public function get_available_product_sections()
        {
        }
    }
    /**
     * Top rated products section class.
     *
     * For displaying top rated products section to single store page.
     *
     * @since 3.3.7
     *
     * @package dokan
     */
    class TopRated extends \WeDevs\Dokan\ProductSections\AbstractProductSection
    {
        /**
         * Set unique section id for the this section.
         *
         * @since 3.3.7
         *
         * @return void
         */
        protected function set_section_id()
        {
        }
        /**
         * Get single store page section title.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public function get_section_title()
        {
        }
        /**
         * Get label for this section.
         *
         * @since 3.3.7
         *
         * @return string
         */
        public function get_section_label()
        {
        }
        /**
         * Get section products.
         *
         * @since 3.3.7
         *
         * @return \WP_Query
         */
        public function get_products($vendor_id)
        {
        }
    }
}
namespace WeDevs\Dokan\REST {
    /**
    * Admin Dashboard
    *
    * @since 2.8.0
    *
    * @package dokan
    */
    class AdminDashboardController extends \WeDevs\Dokan\Abstracts\DokanRESTAdminController
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $base = 'dashboard';
        /**
         * Register all routes releated with stores
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get rss feeds
         *
         * @since 2.8.0
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_feeds($request)
        {
        }
        /**
         * Support SimplePie class in WP 5.5+
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param array  $response    HTTP response.
         * @param array  $parsed_args HTTP request arguments.
         * @param string $url         The request URL.
         *
         * @return array
         */
        public static function dokan_compat_simple_pie_after_five_point_five($response, $parsed_args, $url)
        {
        }
    }
    /**
    * Admin Dashboard
    *
    * @since 2.8.0
    *
    * @package dokan
    */
    class AdminMiscController extends \WeDevs\Dokan\Abstracts\DokanRESTAdminController
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $base = '';
        /**
         * Register all routes releated with stores
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get help documents
         *
         * @return \WP_REST_Response
         */
        public function get_help()
        {
        }
    }
    /**
    * Admin Notice Controller
    *
    * @since 3.3.3
    *
    * @package dokan
    */
    class AdminNoticeController extends \WeDevs\Dokan\Abstracts\DokanRESTAdminController
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $base = 'notices';
        /**
         * Register all routes related with dokan admin notices
         *
         * @since 3.3.3
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get dokan specific notices
         *
         * @return WP_REST_Response
         */
        public function dokan_get_admin_notices()
        {
        }
        /**
         * Get dokan promotional notices
         *
         * @return WP_REST_Response
         */
        public function get_promo_notices()
        {
        }
    }
    /**
    * Admin Dashboard
    *
    * @since 2.8.0
    *
    * @package dokan
    */
    class AdminReportController extends \WeDevs\Dokan\Abstracts\DokanRESTAdminController
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $base = 'report';
        /**
         * Register all routes releated with stores
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get at a glance
         *
         * @since 2.8.0
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_summary($request)
        {
        }
        /**
         * Get overview data
         *
         * @since 2.8.0
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_overview($request)
        {
        }
    }
    /**
     * Dokan Changelog handler class
     *
     * @since 3.3.3
     */
    class ChangeLogController extends \WeDevs\Dokan\Abstracts\DokanRESTAdminController
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $base = 'changelog';
        /**
         * Register all routes related with stores
         *
         * @since 3.3.3
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get Change Logs
         *
         * @since 3.3.3
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_change_log()
        {
        }
    }
    /**
    * Dokan Dummy Data Controller Class
    *
    * @since 3.6.2
    *
    * @package dokan
    */
    class DummyDataController extends \WeDevs\Dokan\Abstracts\DokanRESTController
    {
        /**
         * Endpoint namespace
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Route name
         *
         * @var string
         */
        protected $base = 'dummy-data';
        /**
         * Register the routes for dummy data.
         */
        public function register_routes()
        {
        }
        /**
         * Returns dokan import status.
         *
         * @since 3.6.2
         *
         * @return WP_REST_Response|WP_Error
         */
        public function import_dummy_data_status()
        {
        }
        /**
         * Imports dummy vendors and products.
         *
         * @param WP_REST_Request $request
         *
         * @since 3.6.2
         *
         * @return WP_REST_Response|WP_Error
         */
        public function import_dummy_data($request)
        {
        }
        /**
         * Clears dokan dummy data.
         *
         * @since 3.6.2
         *
         * @return WP_REST_Response|WP_Error
         */
        public function clear_dummy_data()
        {
        }
        /**
         * Checking if have any permission.
         *
         * @since 3.6.2
         *
         * @return boolean
         */
        public function get_permissions_check()
        {
        }
        /**
         * Get the dummy data's schema, conforming to JSON Schema.
         *
         * @since 3.6.2
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * API_Registrar class
     */
    class Manager
    {
        /**
         * Class dir and class name mapping
         *
         * @var array
         */
        protected $class_map;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Register REST API routes.
         *
         * @since 1.2.0
         */
        public function register_rest_routes()
        {
        }
        /**
         * Prepare object for product response
         *
         * @since 2.8.0
         *
         * @return void
         */
        public function prepeare_product_response($response, $object, $request)
        {
        }
        /**
         * If store open close is truned off by admin, unset store_open_colse from api response
         *
         * @param  array $data
         *
         * @since  2.9.13
         *
         * @return array
         */
        public function filter_store_open_close_option($data)
        {
        }
        /**
         * Populate admin commission
         *
         * @param  array $data
         * @param  array $store
         *
         * @since  2.9.13
         *
         * @return array
         */
        public function populate_admin_commission($data, $store)
        {
        }
        /**
         * Send email to admin on adding a new product
         *
         * @param  \WC_Data $object
         * @param  \WP_REST_Request $request
         * @param  Boolean $creating
         *
         * @return void
         */
        public function on_dokan_rest_insert_product($object, $request, $creating)
        {
        }
        /**
         * Make payment field hidden in api response for other vendor
         *
         * @param array $data
         *
         * @since 2.9.21
         *
         * @return array
         */
        public function filter_payment_response($data)
        {
        }
        /**
         * Generate Rest API class map
         *
         * @since 3.5.1
         *
         * @return void
         */
        private function get_rest_api_class_map()
        {
        }
    }
    /**
    * Dokan Order Controller Class
    *
    * @since 2.8.0
    *
    * @package dokan
    */
    class OrderController extends \WeDevs\Dokan\Abstracts\DokanRESTController
    {
        /**
         * Endpoint namespace
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Route name
         *
         * @var string
         */
        protected $base = 'orders';
        /**
         * Post type
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * Post status
         */
        protected $post_status = array();
        /**
         * Stores the request.
         * @var array
         */
        protected $request = array();
        /**
         * Load autometically when class initiate
         *
         * @since 2.8.0
         *
         * @return array
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for orders.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @since  2.8.0
         *
         * @param  int $id Object ID.
         *
         * @return bool|WC_Order|WC_Order_Refund
         */
        public function get_object($id)
        {
        }
        /**
         * Get Item for an object
         *
         * @since 3.9.2
         *
         * @return object
         */
        public function get_item($request)
        {
        }
        /**
         * Validation before update product
         *
         * @since 2.8.0
         *
         * @return bool|WP_Error
         */
        public function validation_before_update_item($request)
        {
        }
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  \WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single order output for response.
         *
         * @since  2.8.0
         *
         * @param  \WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response
         */
        public function prepare_data_for_response($object, $request)
        {
        }
        /**
         * Prepare data for udpate into database
         *
         * @since 2.8.0
         *
         * @return WP_Error|WC_Order|WC_Order_Refund
         */
        public function prepare_object_for_database($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param \WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Get a collection of posts.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get order summary report
         *
         * @since 2.8.0
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_order_summary($request)
        {
        }
        /**
         * Expands an order item to get its data.
         *
         * @param \WC_Order_item $item
         *
         * @return array
         */
        protected function get_order_item_data($item)
        {
        }
        /**
         * Get order notes from an order.
         *
         * @param WP_REST_Request $request
         *
         * @return array|WP_Error
         */
        public function get_order_notes($request)
        {
        }
        /**
         * Create note for an Order
         *
         * @since 2.8.0
         *
         * @return WP_REST_Response|WP_Error
         */
        public function create_order_note($request)
        {
        }
        /**
         * Get a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_order_note($request)
        {
        }
        /**
         * Delete a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_REST_Response|WP_Error
         */
        public function delete_order_note($request)
        {
        }
        /**
         * Prepare a single order note output for response.
         *
         * @param WP_Comment $note Order note object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_note_item_for_response($note, $request)
        {
        }
        /**
         * Checking if have any permission to view orders
         *
         * @since 2.8.0
         *
         * @return boolean
         */
        public function get_orders_permissions_check()
        {
        }
        /**
         * Checking if have any permission to view orders
         *
         * @since 2.8.0
         *
         * @return boolean
         */
        public function get_single_order_permissions_check($request)
        {
        }
        /**
         * Updat order permission checking
         *
         * @since 2.8.0
         *
         * @return bool
         */
        public function update_order_permissions_check()
        {
        }
        /**
         * Checking if have any permission to view orders
         *
         * @since 2.8.0
         *
         * @return boolean
         */
        public function check_orders_summary_permissions()
        {
        }
        /**
         * Set vendor ID on order when creating from REST API
         *
         * @since 2.8.2
         *
         * @param array $args
         *
         * @return array
         */
        public function set_order_vendor_id($args)
        {
        }
        /**
         * Mark order as parent when it has products from multiple vendors
         *
         * @since 2.9.11
         *
         * @param WC_Order        $order
         * @param WP_REST_Request $request
         * @param bool            $creating
         *
         * @return WC_Order
         */
        public function pre_insert_shop_order($order, $request, $creating)
        {
        }
        /**
         * Insert into Dokan sync table once an order is created via API
         *
         * @since 2.8.2 [<description>]
         *
         * @param  WC_Order $object
         * @param  WP_REST_Request $request
         *
         * @return void
         */
        public function after_order_create($object, $request)
        {
        }
        /**
         * Get order statuses without prefixes.
         *
         * @return array
         */
        protected function get_order_statuses()
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Validating the customer id to query orders.
         *
         * @since 3.9.5
         *
         * @param string $param
         * @param WP_REST_Request $request
         * @param string $key
         *
         * @return boolean|WP_Error
         */
        public function rest_validate_customer_id($param, $request, $key)
        {
        }
        /**
         * Retrieves the query params for the posts collection.
         *
         * @since 4.7.0
         *
         * @return array Collection parameters.
         */
        public function get_collection_params()
        {
        }
    }
    /**
    * Dokan Order ControllerV2 Class
    *
    * @since 3.7.10
    *
    * @package dokan
    */
    class OrderControllerV2 extends \WeDevs\Dokan\REST\OrderController
    {
        /**
         * Endpoint namespace
         *
         * @since 3.7.10
         *
         * @var string
         */
        protected $namespace = 'dokan/v2';
        /**
         * Register the routes for orders.
         *
         * @since 3.7.10
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get Order Downloads.
         *
         * @since 3.7.10
         *
         * @param  \WP_REST_Request $requests Request object.
         *
         * @return WP_Error|\WP_HTTP_Response|\WP_REST_Response
         */
        public function get_order_downloads($requests)
        {
        }
        /**
         * Grant downloadable product access to the given order.
         *
         * @since 3.7.10
         *
         * @param \WP_REST_Request $requests Request object.
         *
         * @return WP_Error|\WP_HTTP_Response|\WP_REST_Response
         */
        public function grant_order_downloads($requests)
        {
        }
        /**
         * Revoke downloadable product access to the given order.
         *
         * @since 3.7.10
         *
         * @param \WP_REST_Request $requests Request object.
         *
         * @return WP_Error|\WP_HTTP_Response|\WP_REST_Response
         */
        public function revoke_order_downloads($requests)
        {
        }
        /**
         * Updates bulk orders status.
         *
         * @since 3.7.10
         *
         * @param \WP_REST_Request $requests Request object.
         *
         * @return WP_Error|\WP_HTTP_Response|\WP_REST_Response
         */
        public function process_orders_bulk_action($requests)
        {
        }
        /**
         * Sanitizes order ids.
         *
         * @since 3.7.10
         *
         * @param array $order_ids
         *
         * @return array
         */
        public function sanitize_order_ids($order_ids)
        {
        }
    }
    class ProductAttributeController extends \WC_REST_Product_Attributes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/attributes';
        /**
         * Attribute name.
         *
         * @var string
         */
        protected $attribute = '';
        /**
         * Register the routes for product attributes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the attributes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|bool
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|bool
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a product attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|bool
         */
        public function update_product_attribute_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|bool
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get product attribute and term update collection params.
         *
         * @since 3.7.10
         *
         * @return array
         */
        public function get_product_update_collection_params()
        {
        }
        /**
         * Update product attributes by a product id.
         *
         * @since 3.7.10
         *
         * @param WP_Rest_Request            $request
         * @return WP_Error|WP_REST_Response Rest Response
         */
        public function update_product_attribute($request)
        {
        }
        /**
         * Update product default attributes by a product id.
         *
         * @since 3.7.10
         *
         * @param WP_Rest_Request            $request
         *
         * @return WP_Error|WP_REST_Response Rest Response
         */
        public function update_product_default_attribute($request)
        {
        }
    }
    class ProductAttributeTermsController extends \WC_REST_Product_Attribute_Terms_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Check if a given request has access to read the attributes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Delete a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
    }
    /**
     * Product Block API.
     *
     * @package dokan
     *
     * @author weDevs <info@wedevs.com>
     */
    class ProductBlockController extends \WeDevs\Dokan\REST\ProductController
    {
        /**
         * Endpoint namespace
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Route name
         *
         * @var string
         */
        protected $base = 'blocks/products';
        /**
         * Register all routes related with stores.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get Product detail item for block.
         *
         * @since 3.7.10
         *
         * @param \WP_Request $request
         * @return void
         */
        public function get_item($request)
        {
        }
    }
    /**
     * Products API Controller V2
     *
     * @package dokan
     *
     * @author weDevs <info@wedevs.com>
     */
    class ProductControllerV2 extends \WeDevs\Dokan\REST\ProductController
    {
        /**
         * Endpoint namespace
         *
         * @var string
         */
        protected $namespace = 'dokan/v2';
        /**
         * Register all routes related with stores
         *
         * @since 3.7.10
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Saves product.
         *
         * @since 3.7.16
         *
         * @param WP_REST_Request $request
         *
         * @return void
         */
        public function create_item($request)
        {
        }
        /**
         * Updates product.
         *
         * @since 3.7.16
         *
         * @param WP_REST_Request $request
         *
         * @return void
         */
        public function update_item($request)
        {
        }
        /**
         * Save chosen category to database.
         *
         * @param WP_Error|WP_REST_Response $response
         *
         * @return void
         */
        private function set_chosen_categories($response)
        {
        }
        /**
         * Product API query parameters collections.
         *
         * @since 3.7.10
         *
         * @return array Query parameters.
         */
        public function get_product_collection_params()
        {
        }
        /**
         * Returns data by which products can be filtered.
         *
         * @since 3.7.10
         *
         * @return array
         */
        public function get_product_filter_by_data()
        {
        }
        /**
         * Preparing query parameters array to fetch products from database.
         *
         * @param WP_REST_Request $request
         *
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Returns filter data items schema.
         *
         * @since DOKAN_LITE
         *
         * @return array array of the schema.
         */
        public function get_filter_data_schema()
        {
        }
    }
    /**
     * Class Controller
     *
     * @since   3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal\REST
     */
    class ReverseWithdrawalController extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Route name
         *
         * @var string
         */
        protected $rest_base = 'reverse-withdrawal';
        /**
         * Register all routes related with reverse withdrawal
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Checks if a given request has access to get items.
         *
         * @since 3.5.1
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool True if the request has read access, false otherwise.
         */
        public function get_stores_balance_permissions_check($request)
        {
        }
        /**
         * This method will return transactions group by each stores
         *
         * @since 3.5.1
         *
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function get_stores_balance($request)
        {
        }
        /**
         * Checks if a given request has access to get items.
         *
         * @since 3.5.1
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool True if the request has read access, false otherwise.
         */
        public function get_store_transactions_permissions_check($request)
        {
        }
        /**
         * Checks if a given request has access to create items.
         *
         * @since 3.7.24
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool True if the request has read access, false otherwise.
         */
        public function create_transactions_permissions_check($request)
        {
        }
        /**
         * This method will return transactions of a single store
         *
         * @since 3.5.1
         *
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function get_store_transactions($request)
        {
        }
        /**
         * Checks if a given request has access to get items.
         *
         * @since 3.7.16
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool True if the request has read access, false otherwise.
         */
        public function get_vendor_due_status_permissions_check($request)
        {
        }
        /**
         * This method will return due status of a single vendor
         *
         * @since 3.7.16
         *
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function get_vendor_due_status($request)
        {
        }
        /**
         * Checks if a given request has access to get items.
         *
         * @since 3.5.1
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool True if the request has read access, false otherwise.
         */
        public function get_stores_permissions_check($request)
        {
        }
        /**
         * This method will return unique stores under reverse withdrawal table
         *
         * @since 3.5.1
         *
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function get_stores($request)
        {
        }
        /**
         * This method will add reverse payment amount to cart
         *
         * @since 3.7.16
         *
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function add_to_cart($request)
        {
        }
        /**
         * Checks if a given request has access to get items.
         *
         * @since 3.5.1
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool True if the request has read access, false otherwise.
         */
        public function get_transaction_types_permissions_check($request)
        {
        }
        /**
         * This method will return transaction types
         *
         * @since 3.5.1
         *
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function get_transaction_types($request)
        {
        }
        /**
         * Create manual reverse withdrawal transaction
         *
         * @since 3.7.24
         *
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function create_transaction($request)
        {
        }
        /**
         * Prepare refund for response
         *
         * @since 3.5.1
         *
         * @param array           $item
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function prepare_balance_for_response($item, $request)
        {
        }
        /**
         * Prepare refund for response
         *
         * @since 3.7.16
         *
         * @param array           $item
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function prepare_vendor_due_status_for_response($item, $request)
        {
        }
        /**
         * Prepare transaction for response
         *
         * @since 3.5.1
         *
         * @param array           $item
         * @param WP_REST_Request $request
         * @param float           $current_balance
         *
         * @return WP_REST_Response
         */
        public function prepare_transaction_for_response($item, $request, &$current_balance)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @since 3.5.1
         *
         * @param array           $item
         * @param WP_REST_Request $request Request object.
         *
         * @return array Links for the given item.
         */
        protected function prepare_links($item, $request)
        {
        }
        /**
         * Format item's collection for response
         *
         * @since 3.5.1
         *
         * @param WP_REST_Response|WP_Error $response
         * @param WP_REST_Request           $request
         * @param int                       $total_items
         *
         * @return WP_REST_Response|WP_Error
         */
        public function format_collection_response($response, $request, $total_items)
        {
        }
        /**
         * Retrieves the query params for the collections.
         *
         * @since 3.5.1
         *
         * @return array Query parameters for the collection.
         */
        public function get_stores_balance_route_params()
        {
        }
        /**
         * Retrieves the query params for the collections.
         *
         * @since 3.5.1
         *
         * @return array Query parameters for the collection.
         */
        public function get_store_transactions_route_params()
        {
        }
        /**
         * Get the Cart schema, conforming to JSON Schema.
         *
         * @since 3.5.1
         *
         * @return array
         */
        public function get_public_item_schema_for_store_balance()
        {
        }
        /**
         * Get the Cart schema, conforming to JSON Schema.
         *
         * @since 3.5.1
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the Cart schema, conforming to JSON Schema.
         *
         * @since 3.5.1
         *
         * @return array
         */
        public function get_public_item_schema_for_transaction_types()
        {
        }
        /**
         * Get the Cart schema, conforming to JSON Schema.
         *
         * @since 3.5.1
         *
         * @return array
         */
        public function get_public_schema_for_stores()
        {
        }
        /**
         * Get the Cart schema, conforming to JSON Schema.
         *
         * @since 3.7.16
         *
         * @return array
         */
        public function get_public_schema_for_vendor_balance()
        {
        }
    }
    /**
     * StoreSettings API Controller
     *
     * @package dokan
     *
     * @author weDevs <info@wedevs.com>
     */
    class StoreSettingController extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Route name
         *
         * @var string
         */
        protected $rest_base = 'settings';
        /**
         * Register all routes related to settings
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Update Store
         *
         * @param \WP_REST_Request $request
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return WP_Error|\WP_REST_Response
         */
        public function update_settings($request)
        {
        }
        /**
         * @param $request
         *
         * @return mixed|WP_Error|\WP_HTTP_Response|\WP_REST_Response
         */
        public function get_settings($request)
        {
        }
        /**
         * Permission callback for vendor settings
         *
         * @return bool|WP_Error
         */
        public function get_settings_permission_callback()
        {
        }
        /**
         * Get vendor
         *
         * @return WP_Error|Vendor
         */
        protected function get_vendor()
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param \WC_Data $object Object data.
         * @param \WP_REST_Request $request Request object.
         *
         * @return array Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Prepare a single item output for response
         *
         * @param $store
         * @param \WP_REST_Request $request Request object.
         * @param array $additional_fields (optional)
         *
         * @return \WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($store, $request, $additional_fields = [])
        {
        }
    }
    /**
     * StoreSettings API Controller
     *
     * @package dokan
     *
     * @author weDevs <info@wedevs.com>
     */
    class StoreSettingControllerV2 extends \WeDevs\Dokan\REST\StoreSettingController
    {
        /**
         * Endpoint namespace
         *
         * @var string
         */
        protected $namespace = 'dokan/v2';
        /**
         * Register all routes related to settings
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Update Settings Group or Page.
         *
         * @since 3.7.10
         *
         * @param WP_REST_Request $request The request object.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_settings($request)
        {
        }
        /**
         * Update Store single settings.
         *
         * @since 3.7.10
         *
         * @param WP_REST_Request $request
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_single_settings($request)
        {
        }
        /**
         * Update Store single settings field.
         *
         * @since 3.7.10
         *
         * @param WP_REST_Request $request
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_single_settings_field($request)
        {
        }
        /**
         * @param $request
         *
         * @return WP_Error|WP_HTTP_Response|WP_REST_Response
         */
        public function get_settings_list($request)
        {
        }
        /**
         * @param $request
         *
         * @return WP_Error|WP_HTTP_Response|WP_REST_Response
         */
        public function get_settings_group($request)
        {
        }
        /**
         * @param $request
         *
         * @return WP_Error|WP_HTTP_Response|WP_REST_Response
         */
        public function get_single_settings($request)
        {
        }
        /**
         * @param $request
         *
         * @return WP_Error|WP_HTTP_Response|WP_REST_Response
         */
        public function get_single_settings_field($request)
        {
        }
        /**
         * Args for updating a single setting.
         *
         * @return array
         */
        private function update_single_settings_args()
        {
        }
        /**
         * Args for updating setting group.
         *
         * @return array
         */
        private function update_settings_group_args()
        {
        }
    }
    class VendorDashboardController extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Route name
         *
         * @var string
         */
        protected $base = 'vendor-dashboard';
        /**
         * Vendor dashboard controller constructor.
         *
         * @since 3.3.3
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get dashboard statistics.
         *
         * @since 3.3.3
         *
         * @return WP_Error|WP_HTTP_Response|WP_REST_Response
         */
        public function get_dashboard_statistics()
        {
        }
        /**
         * Get Vendor profile Information.
         *
         * @since 3.3.3
         *
         * @return WP_Error|WP_HTTP_Response|WP_REST_Response
         */
        public function get_profile_information()
        {
        }
        /**
         * Get Vendor Sales Report.
         *
         * @since 3.3.3
         *
         * @param WP_REST_Request $request
         *
         * @return WP_Error|WP_HTTP_Response|WP_REST_Response
         */
        public function get_sales_reports($request)
        {
        }
        /**
         * Get Vendor products reports summary.
         *
         * @since 3.3.3
         *
         * @return WP_Error|WP_HTTP_Response|WP_REST_Response
         */
        public function get_products_summary()
        {
        }
        /**
         * Get Vendor Order reports summary.
         *
         * @since 3.3.3
         *
         * @return WP_Error|WP_HTTP_Response|WP_REST_Response
         */
        public function get_orders_summary($request)
        {
        }
        /**
         * Get Preferences.
         *
         * @since 3.3.3
         *
         * @return WP_Error|WP_HTTP_Response|WP_REST_Response
         */
        public function get_preferences()
        {
        }
        /**
         * Get our sample schema for preferences.
         */
        public function get_preferences_schema()
        {
        }
        /**
         * Get our sample schema for order-summary.
         */
        public function get_order_summary_schema()
        {
        }
        /**
         * Retrieves the query params for the posts collection.
         *
         * @since 4.7.0
         *
         * @return array Collection parameters.
         */
        public function get_collection_params()
        {
        }
    }
}
namespace WeDevs\Dokan\Traits {
    trait RESTResponseError
    {
        /**
         * Send REST error response
         *
         * @since 3.0.0
         *
         * @param \Exception $e
         * @param string     $default_message
         *
         * @return \WP_Error
         */
        protected function send_response_error(\Exception $e, $default_message = '')
        {
        }
    }
}
namespace WeDevs\Dokan\REST {
    class WithdrawController extends \WP_REST_Controller
    {
        use \WeDevs\Dokan\Traits\RESTResponseError;
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'dokan/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'withdraw';
        /**
         * Register all routes related with withdraw.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Check permission for getting withdraw
         *
         * @since 2.8.0
         *
         * @return bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check permission for get a withdraw
         *
         * @since 3.0.0
         *
         * @param WP_REST_Request $request
         *
         * @return bool
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check permission for creating a withdraw request
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check permission for update a withdraw
         *
         * @since 3.0.0
         *
         * @param WP_REST_Request $request
         *
         * @return bool
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check permission for deleting withdraw
         *
         * @since 2.8.0
         *
         * @return bool
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check Permission for Wthdraw Payment Method Items.
         *
         * @since 3.8.3
         *
         * @return bool
         */
        public function get_payment_method_items_permissions_check($request)
        {
        }
        /**
         * Check permission for getting withdraw
         *
         * @since 2.8.0
         *
         * @return bool
         */
        public function batch_items_permissions_check()
        {
        }
        /**
         * Validate a withdraw is exists
         *
         * @since 3.0.0
         *
         * @param int $id
         *
         * @return bool|\WP_Error
         */
        public function withdraw_exists($id)
        {
        }
        /**
         * Get user data
         *
         * @since 2.8.0
         *
         * @return array
         */
        public function get_user_data($user_id)
        {
        }
        /**
         * Get withdraws
         *
         * @since 3.0.0
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get vendor balance
         *
         * @return WP_REST_Response
         */
        public function get_balance()
        {
        }
        /**
         * Make a withdraw request
         *
         * @since 3.0.0
         *
         * @return WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a withdraw
         *
         * @since 3.0.0
         *
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Cancel withdraw status
         *
         * @since 3.0.0
         *
         * @return WP_REST_Response|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a withdraw
         *
         * @since 3.0.0
         *
         * @param  WP_REST_Request $request
         *
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Get Withdraw Payment Method Items.
         *
         * @since 3.8.3
         *
         * @param  WP_REST_Request $request
         *
         * @return WP_REST_Response
         */
        public function get_payment_method_items($request)
        {
        }
        /**
         * Approve, Pending and cancel bulk action
         *
         * JSON data format for sending to API
         *     {
         *         "approved" : [
         *             "1", "9", "7"
         *         ],
         *         "pending" : [
         *             "2"
         *         ],
         *         "delete" : [
         *             "4"
         *         ],
         *         "cancelled" : [
         *             "5"
         *         ]
         *     }
         *
         * @since 2.8.0
         *
         * @return WP_REST_Response|WP_Error
         */
        public function batch_items($request)
        {
        }
        /**
         * Get all withdraw method charges.
         *
         * @since 3.9.6
         *
         * @return WP_Error|\WP_HTTP_Response|WP_REST_Response
         */
        public function get_all_method_charges()
        {
        }
        /**
         * Get withdraw method charge.
         *
         * @since 3.9.6
         *
         * @return WP_Error|\WP_HTTP_Response|WP_REST_Response
         */
        public function get_method_charge($request)
        {
        }
        /**
         * Prepare data for response
         *
         * @since 2.8.0
         *
         * @param $withdraw \WeDevs\Dokan\Withdraw\Withdraw
         * @param $request \WP_REST_Request
         *
         * @return WP_REST_Response|WP_Error
         */
        public function prepare_item_for_response($withdraw, $request)
        {
        }
        /**
         * Prepare Payment Method Item Data for Response.
         *
         * @since 3.8.3
         *
         * @param string          $payment_method
         * @param WP_REST_Request $request
         *
         * @return WP_REST_Response|WP_Error
         */
        public function prepare_payment_method_item_for_response($payment_method, $request)
        {
        }
        /**
         * Format item's collection for response
         *
         * @param  WP_REST_Response $response
         * @param  WP_REST_Request $request
         * @param  array $items
         * @param  int $total_items
         *
         * @return object
         */
        public function format_collection_response($response, $request, $total_items)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param \WeDevs\Dokan\Withdraw\Withdraw         $object  Object data.
         * @param WP_REST_Request $request                Request object.
         *
         * @return array Links for the given post.
         */
        protected function prepare_links($withdraw, $request)
        {
        }
        /**
         * Item schema
         *
         * @since DOKAN_LITE
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Item Schema for Withdraw Payment Methods.
         *
         * @since DOKAN_LITE
         *
         * @return array
         */
        public function get_payment_method_item_schema()
        {
        }
        /**
         * Schema for batch processing
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_public_batch_schema()
        {
        }
    }
    class WithdrawControllerV2 extends \WeDevs\Dokan\REST\WithdrawController
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'dokan/v2';
        /**
         * Register all routes releated with stores.
         *
         * @since 3.7.10
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Returns withdraw settings for vendors.
         *
         * @since 3.7.10
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_withdraw_settings()
        {
        }
        /**
         * Returns withdraw summary.
         *
         * @since 3.7.10
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get_withdraw_summary()
        {
        }
    }
}
namespace WeDevs\Dokan {
    /**
     * Vendor Registration
     *
     * @since 2.8
     */
    class Registration
    {
        public function __construct()
        {
        }
        /**
         * Validate vendor registration
         *
         * @param \WP_Error $error
         *
         * @return \WP_Error
         */
        public function validate_registration($error)
        {
        }
        /**
         * Inject first and last name to WooCommerce for new vendor registraion
         *
         * @param array $data
         *
         * @return array
         */
        public function set_new_vendor_names($data)
        {
        }
        /**
         * Adds default dokan store settings when a new vendor registers
         *
         * @param int   $user_id
         * @param array $data
         *
         * @return void
         */
        public function save_vendor_info($user_id, $data)
        {
        }
        /**
         * Adds address profile completion value in dokan settings.
         *
         * @3.10.2
         *
         * @param int   $vendor_id
         * @param array $new_dokan_settings
         * @param array $old_profile_settings
         *
         * @return array
         */
        public function check_and_set_address_profile_completion($vendor_id, $new_dokan_settings, $old_profile_settings)
        {
        }
    }
}
namespace WeDevs\Dokan\ReverseWithdrawal\Admin {
    /**
     * Class Hooks
     *
     * @since 3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal\Admin
     */
    class Hooks
    {
        /**
         * Admin constructor.
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * Exclude commission from report log if order contains advertisement product
         *
         * @since 3.5.1
         *
         * @param bool $exclude
         * @param object $order
         *
         * @return bool
         */
        public function report_log_exclude_commission($exclude, $order)
        {
        }
        /**
         * Maybe take action after settings has been saved
         *
         * @since 3.5.1
         *
         * @param string $option_name
         * @param array $new_value
         * @param array $old_value
         *
         * @return void
         */
        public function maybe_take_action($option_name, $new_value, $old_value)
        {
        }
        /**
         * Remove reverse withdrawal base product if page has been deleted
         *
         * @sience 3.5.1
         *
         * @param int $post_id
         *
         * @return void
         */
        public function delete_base_product($post_id)
        {
        }
    }
    /**
     * Class Settings
     *
     * @package WeDevs\Dokan\ReverseWithdrawal\Admin
     *
     * @since 3.5.1
     */
    class Settings
    {
        /**
         * Settings constructor.
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * Load all settings fields
         *
         * @since 3.5.1
         *
         * @param array $fields
         *
         * @return array
         */
        public function load_settings_fields($fields)
        {
        }
        /**
         * Validates admin delivery settings
         *
         * @since 3.5.1
         *
         * @param string $option_name
         * @param array $option_value
         *
         * @return void
         */
        public function validate_admin_settings($option_name, $option_value)
        {
        }
        /**
         * Validates admin delivery settings
         *
         * @since 3.5.1
         *
         * @param string $option_name
         * @param array $option_value
         *
         * @return void
         */
        public function create_reverse_withdrawal_base_product($option_name, $option_value)
        {
        }
    }
}
namespace WeDevs\Dokan\ReverseWithdrawal {
    /**
     * Class Ajax
     *
     * @since   3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal
     */
    class Ajax
    {
        /**
         * Ajax constructor.
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * This method will add a product to cart from product edit page
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function reverse_withdrawal_payment()
        {
        }
    }
}
namespace WeDevs\Dokan\ReverseWithdrawal\BackgroundProcess {
    /**
     * Async Requests
     *
     * @since 3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal\BackgroundProcess
     */
    class AsyncRequests
    {
        /**
         * Class Constructor
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * Take actions for given vendors
         *
         * @since 3.5.1
         *
         * @param array $args
         *
         * @return void
         */
        public function maybe_take_actions($args = [])
        {
        }
        /**
         * Send billing invoice email
         *
         * @since 3.5.1
         *
         * @param array $args
         *
         * @return void
         */
        public function send_billing_invoice_email($args = [])
        {
        }
    }
    /**
     * @since 3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal\BackgroundProcess
     */
    class CronActions
    {
        /**
         * CronActions constructor.
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * Schedule an action with the hook 'dokan_reverse_withdrawal_midnight_cron' to run at midnight each day
         * so that our callback is run then.
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function schedule_action()
        {
        }
        /**
         * This method will schedule/unscheduled monthly billing reminder cron
         *
         * @since 3.5.1
         *
         * @param string $option_name
         * @param array $new_value
         * @param array $old_value
         *
         * @return void
         */
        public function after_save_settings($option_name, $new_value, $old_value)
        {
        }
        /**
         * Take actions for unpaid vendors or revert taken actions
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function maybe_take_action()
        {
        }
        /**
         * Send monthly billing reminder email to vendors
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function send_billing_invoice_email()
        {
        }
    }
}
namespace WeDevs\Dokan\ReverseWithdrawal {
    /**
     * @package WeDevs\Dokan\ReverseWithdrawal
     *
     * @since 3.5.1
     */
    class Cache
    {
        /**
         * Class constructor
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * Clear cache
         *
         * @since 3.5.1
         *
         * @param array $data
         *
         * @return void
         */
        public function clear_cache($data)
        {
        }
    }
    /**
     * Class Cart
     *
     * @since 3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal
     */
    class Cart
    {
        /**
         * Cart constructor.
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * Remove seller name on cart and other areas
         *
         * @since 3.5.1
         *
         * @param array $item_data
         * @param array $cart_item
         *
         * @return array
         */
        public function remove_seller_name_from_cart_item($item_data, $cart_item)
        {
        }
        /**
         * Add custom price into cart meta item.
         *
         * @since 3.5.1
         *
         * @param \WC_Cart $cart for whole cart.
         */
        public function woocommerce_custom_price_to_cart_item($cart)
        {
        }
        /**
         * This method will remove other products from cart if reverse withdrawal payment exists in cart.
         *
         * @since 3.5.1
         *
         * @param bool $passed
         * @param int $product_id
         *
         * @return bool
         */
        public static function prevent_purchasing_multiple_products($passed, $product_id)
        {
        }
    }
    /**
     * @since 3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal
     */
    class FailedActions
    {
        /**
         * Reverse pay actions
         *
         * @since 3.5.1
         *
         * @param int $vendor_id
         *
         * @return void
         */
        public function ensure_reverse_pay_actions($vendor_id)
        {
        }
        /**
         * Revert reverse pay taken actions
         *
         * @since 3.5.1
         *
         * @param int $vendor_id
         *
         * @return void
         */
        public function revert_reverse_pay_actions($vendor_id)
        {
        }
        /**
         * This method will make vendor status inactive
         *
         * @since 3.5.1
         *
         * @param int $vendor_id
         *
         * @return void
         */
        public function make_status_inactive($vendor_id)
        {
        }
        /**
         * This method will make vendor status active
         *
         * @since 3.5.1
         *
         * @param int $vendor_id
         * @param bool $remove_action
         *
         * @return void
         */
        public function make_status_active($vendor_id, $remove_action = false)
        {
        }
        /**
         * This method will remove a failed action for a vendor
         *
         * @since 3.5.1
         *
         * @param int $vendor_id
         * @param string $action
         *
         * @return void
         */
        public function remove_failed_action($vendor_id, $action)
        {
        }
    }
    /**
     * Helper class for reverse withdrawal
     *
     * @since   3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal
     */
    class Helper
    {
        /**
         * This method will return option key for reverse withdrawal base product
         *
         * @since 3.5.1
         *
         * @return string
         */
        public static function get_base_product_option_key()
        {
        }
        /**
         * This method will return balance_threshold_exceed_date_key
         *
         * @since 3.5.1
         *
         * @return string
         */
        public static function balance_threshold_exceed_date_key()
        {
        }
        /**
         * This method will return failed actions key
         *
         * @return string
         */
        public static function failed_actions_key()
        {
        }
        /**
         * Get reverse withdrawal failed payment actions
         *
         * @since 3.5.1
         *
         * @return array|string return associated array of transaction types if no argument is provided. If $transaction_type is provided and if data exists then return the label otherwise return empty string
         */
        public static function get_transaction_types($transaction_type = null)
        {
        }
        /**
         * Get reverse withdrawal failed payment actions
         *
         * @since 3.5.1
         *
         * @param $vendor_id
         *
         * @return array
         */
        public static function get_failed_actions_by_vendor($vendor_id)
        {
        }
        /**
         * Set reverse withdrawal failed payment actions
         *
         * @since 3.5.1
         *
         * @param int   $vendor_id
         * @param array $failed_actions
         *
         * @return void
         */
        public static function set_failed_actions_by_vendor($vendor_id, $failed_actions)
        {
        }
        /**
         * This method will return the balance threshold exceeded date
         *
         * @since 3.5.1
         *
         * @param $vendor_id
         *
         * @return string
         */
        public static function get_balance_threshold_exceed_date($vendor_id)
        {
        }
        /**
         * This method will update the balance threshold exceeded date
         *
         * @since DOKA_SINCE
         *
         * @param int    $vendor_id
         * @param string $date
         *
         * @return void
         */
        public static function set_balance_threshold_exceed_date($vendor_id, $date = '')
        {
        }
        /**
         * This method will check if cart contain reverse withdrawal product
         *
         * @since 3.5.1
         *
         * @return bool
         */
        public static function has_reverse_withdrawal_payment_in_order($order)
        {
        }
        /**
         * This method will return reverse withdrawal payment amount
         *
         * @since 3.5.1
         *
         * @param \WC_Abstract_Order $order
         *
         * @return float|bool false if meta key not found
         */
        public static function get_balance_from_order(\WC_Abstract_Order $order)
        {
        }
        /**
         * Get reverse withdrawal base product id
         *
         * @since 3.5.1
         *
         * @return int
         */
        public static function get_reverse_withdrawal_base_product()
        {
        }
        /**
         * This method will check if a product is reverse withdrawal product
         *
         * @since 3.8.1
         *
         * @param int $product_id
         *
         * @return bool
         */
        public static function is_reverse_withdrawal_product($product_id)
        {
        }
        /**
         * This method will check if cart contain reverse withdrawal payment product
         *
         * @since 3.5.1
         *
         * @return bool
         */
        public static function has_reverse_withdrawal_payment_in_cart()
        {
        }
        /**
         * This method will return formatted transaction id
         *
         * @since 3.5.1
         *
         * @param int    $transaction_id
         * @param string $transaction_type
         * @param string $contex admin or seller
         *
         * @return string
         */
        public static function get_transaction_url_from_transaction_id($transaction_id, $transaction_type, $contex = 'admin')
        {
        }
        /**
         * This method will return formatted transaction data
         *
         * @since 3.5.1
         *
         * @param array  $item
         * @param float  $current_balance
         * @param string $context
         *
         * @return array
         */
        public static function get_formated_transaction_data($item, &$current_balance, $context = 'admin')
        {
        }
        /**
         * This method will return default transaction data for vendor reverse withdrawal balance
         *
         * @since 3.5.1
         *
         * @return array
         */
        public static function get_default_transaction_date()
        {
        }
        /**
         * This method will return payable amount of a vendor for a month
         *
         * @param int        $vendor_id
         * @param int|string $current_date
         *
         * @return float|WP_Error
         */
        public static function get_vendor_payable_amount_by_month($vendor_id, $current_date)
        {
        }
        /**
         * This method will return payable balance of a vendor
         *
         * @since 3.5.1
         *
         * @param int|null        $vendor_id
         * @param int|string|null $current_date
         *
         * @return array|WP_Error
         */
        public static function get_vendor_balance($vendor_id = null, $current_date = null)
        {
        }
        /**
         * This method will check if vendor needs to pay balance along with details data
         *
         * @since 3.5.1
         *
         * @param int|null $vendor_id
         *
         * @return array|WP_Error
         */
        public static function get_vendor_due_status($vendor_id = null, $current_date = null)
        {
        }
        /**
         * This method will check if a vendors need to pay their unpaid balance
         *
         * @since 3.5.1
         *
         * @param int|null $vendor_id
         *
         * @return bool|WP_Error
         */
        public static function is_balance_due($vendor_id = null)
        {
        }
        /**
         * This method will return formatted failed action messages
         *
         * @since 3.5.1
         *
         * @return string
         */
        public static function get_formatted_failed_actions()
        {
        }
        /**
         * This method will return formatted failed action messages
         *
         * @since 3.5.1
         *
         * @param int $vendor_id
         *
         * @return string
         */
        public static function get_formatted_failed_actions_by_vendor($vendor_id)
        {
        }
        /**
         * Get formatted billing type
         *
         * @since 3.7.16
         *
         * @param string $billing_type
         *
         * @return array|string
         */
        public static function get_formatted_billing_type($billing_type = '')
        {
        }
        /**
         * This method will add reverse payment amount to cart
         *
         * @since 3.7.16
         *
         * @param string $amount
         *
         * @return WP_Error|bool true if product is added to cart, WP_Error otherwise
         */
        public static function add_payment_to_cart($amount)
        {
        }
    }
    /**
     * Class Hooks
     *
     * @since 3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal
     */
    class Hooks
    {
        /**
         * Hooks constructor.
         *
         * @since 3.5.1
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * After reverse withdrawal is inserted
         *
         * After a reverse withdrawal entry is inserted, we will check if we had to take any actions or revert previous taken actions.
         * This will make sure immediate update of vendor status.
         *
         * @since 3.5.1
         *
         * @param array $data
         *
         * @return void
         */
        public function after_reverse_withdrawal_inserted($data)
        {
        }
        /**
         * Unset withdraw menu
         *
         * @since 3.5.1
         *
         * @param array $menu
         *
         * @return array
         */
        public function unset_withdraw_menu($menu)
        {
        }
        /**
         * This method will remove add to cart button
         *
         * @since 3.5.1
         *
         * @param bool $purchasable
         * @param \WC_Product $product
         *
         * @return bool
         */
        public function hide_add_to_cart_button($purchasable, $product)
        {
        }
        /**
         * This method will hide product price
         *
         * @since 3.5.1
         *
         * @param string $price
         * @param \WC_Product $product
         *
         * @return string
         */
        public function hide_product_price($price, $product)
        {
        }
        /**
         * Process order status changed
         *
         * @since 3.5.1
         *
         * @param string $order_id
         * @param string $old_status
         * @param string $new_status
         *
         * @return void
         */
        public function process_order_status_changed($order_id, $old_status, $new_status)
        {
        }
        /**
         * Add reverse withdrawal nav
         *
         * @since 3.5.1
         *
         * @param array $urls
         *
         * @return array
         */
        public function add_reverse_withdrawal_nav($urls)
        {
        }
    }
    /**
     * Class InstallerHelper
     *
     * @since 3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal
     */
    class InstallerHelper
    {
        /**
         * Create Reverse Withdrawal Table
         *
         * @since 3.5.1
         *
         * @return void
         */
        public static function create_reverse_withdrawal_table()
        {
        }
        /**
         * This method will create reverse withdrawal base product
         *
         * @since 3.5.1
         *
         * @return void
         */
        public static function create_reverse_withdrawal_base_product()
        {
        }
    }
    /**
     * Database Manager Class
     *
     * @since 3.5.1
     *
     * @class Manager
     *
     * @package WeDevs\Dokan\ReverseWithdrawal
     */
    class Manager
    {
        /**
         * Table name for dokan_reverse_withdrawal table
         *
         * @var string
         *
         * @since 3.5.1
         */
        private $table;
        /**
         * Manager constructor.
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * This method will return data from dokan_reverse_withdrawal table
         *
         * @since 3.5.1
         *
         * @param array $args
         *
         * @return array|int|WP_Error
         */
        public function all($args = [])
        {
        }
        /**
         * This method will get all/selected vendors balance
         *
         * @since 3.5.1
         *
         * @param array $args
         *
         * @return array|WP_Error
         */
        public function get_stores_balance($args = [])
        {
        }
        /**
         * This method will return current balance of a vendor
         *
         * @since 3.5.1
         *
         * @param array $args
         *
         * @return float|WP_Error
         */
        public function get_store_balance($args = [])
        {
        }
        /**
         * This method will get all the transactions for a vendor
         *
         * @since 3.5.1
         *
         * @param array $args
         *
         * @return array|WP_Error
         */
        public function get_store_transactions($args = [])
        {
        }
        /**
         * This method will return a single item from reverse withdrawal table
         *
         * @since 3.5.1
         *
         * @param int $id
         *
         * @return WP_Error|array
         */
        public function get($id = 0)
        {
        }
        /**
         * Insert a new item into database.
         *
         * @since 3.5.1
         *
         * @param array $args
         *
         * @return int|WP_Error
         */
        public function insert($args = [])
        {
        }
        /**
         * Check if reverse withdrawal already inserted for an order
         *
         * @since 3.5.1
         *
         * @param int $order_id
         *
         * @return bool
         */
        public function is_reverse_withdrawal_added($order_id)
        {
        }
        /**
         * Check if reverse withdrawal payment already inserted for an order
         *
         * @since 3.5.1
         *
         * @param int $order_id
         *
         * @return bool
         */
        public function is_payment_inserted($order_id)
        {
        }
        /**
         * This method will return all refunded amount for a specific order
         *
         * @since 3.5.1
         *
         * @param int $order_id
         *
         * @return float
         */
        public function get_total_refunded_amount_by_order($order_id)
        {
        }
        /**
         * This method will return all the payments made by a vendor in a date range
         *
         * @since 3.5.1
         *
         * @param array $args
         *
         * @return WP_Error|float
         */
        public function get_payments_by_vendor($args = [])
        {
        }
        /**
         * This method will return commission amount for a specific order
         *
         * @since 3.5.1
         *
         * @param int $order_id
         *
         * @return float
         */
        public function get_commission_amount_by_order($order_id)
        {
        }
        /**
         * This method will return unique stores under reverse withdrawal table
         *
         * @param array $args
         *
         * @since 3.5.1
         *
         * @return array|WP_Error
         */
        public function get_stores($args = [])
        {
        }
        /**
         * Get dokan_reverse_withdrawal table with prefix
         *
         * @since 3.5.1
         *
         * @return string
         */
        public function get_table()
        {
        }
        /**
         * This will check if given var is empty or not.
         *
         * @since 3.5.1
         *
         * @param mixed $var
         *
         * @return bool
         */
        protected function is_empty($var)
        {
        }
    }
    /**
     * Class Order
     *
     * @since 3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal
     */
    class Order
    {
        /**
         * Order constructor.
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * Insert reverse withdrawal payment info into database after order status has been completed.
         *
         * @since 3.5.1
         *
         * @param int    $order_id of the $order_id .
         * @param string $old_status old status of the order.
         * @param string $new_status this is new status of the order.
         *
         * @return void
         */
        public function process_order_status_changed($order_id, $old_status, $new_status)
        {
        }
        /**
         * Insert reverse withdrawal payment into database after order status has been completed
         *
         * @since 3.5.1
         *
         * @param int $order_id
         *
         * @return void
         */
        public function process_payment($order_id)
        {
        }
        /**
         * This method will insert reverse withdrawal payment record into database
         *
         * @since 3.5.1
         *
         * @param int $order_id
         *
         * @return void
         */
        protected function insert_payment($order_id)
        {
        }
        /**
         * Stores reverse withdrawal payment amount under the line item meta.
         *
         * @since 3.5.1
         *
         * @param \WC_Order_Item_Product $line_item     The line item added to the order.
         * @param string                 $cart_item_key The key of the cart item being added to the cart.
         * @param array                  $cart_item     The cart item data.
         */
        public static function store_line_item_metas($line_item, $cart_item_key, $cart_item)
        {
        }
        /**
         * Hide meta key in the order.
         *
         * @since 3.5.1
         *
         * @param  string $display_key of the key.
         * @param  object $meta for the meta data.
         * @param  array $item array.
         *
         * @return string
         */
        public function hide_order_item_meta_key($display_key, $meta, $item)
        {
        }
        /**
         * Hide meta key in the order.
         *
         * @since 3.5.1
         *
         * @param  mixed $display_value for the display item.
         * @param  object $meta data of the order.
         * @param  array $item item array.
         *
         * @return string
         */
        public function hide_order_item_meta_value($display_value, $meta, $item)
        {
        }
    }
    /**
     * Reverse Withdrawal Class
     *
     * This class will be the base class for the reverse withdrawal feature
     *
     * @since 3.5.1
     */
    class ReverseWithdrawal
    {
        use \WeDevs\Dokan\Traits\ChainableContainer;
        /**
         * Cloning is forbidden.
         *
         * @since 3.5.1
         */
        public function __clone()
        {
        }
        /**
         * Unserializing instances of this class is forbidden.
         *
         * @since 3.5.1
         */
        public function __wakeup()
        {
        }
        /**
         * Class constructor
         *
         * @since 3.5.1
         */
        public function __construct()
        {
        }
        /**
         * Set controllers
         *
         * @since 3.5.1
         *
         * @return void
         */
        private function set_controllers()
        {
        }
        /**
         * Initialize all hooks
         *
         * @since 3.5.1
         *
         * @return void
         */
        private function init_hooks()
        {
        }
        /**
         * Rest api class map
         *
         * @param array $classes
         *
         * @since 3.5.1
         *
         * @return array
         */
        public function rest_api_class_map($classes)
        {
        }
    }
    /**
     * @class SettingsHelper
     *
     * @since 3.5.1
     *
     * @package WeDevs\Dokan\ReverseWithdrawal
     */
    class SettingsHelper
    {
        /**
         * Check if reverse withdrawal feature is enabled
         *
         * @since 3.5.1
         *
         * @return bool
         */
        public static function is_enabled()
        {
        }
        /**
         * Get enabled payment gateways for reverse withdrawal
         *
         * @since 3.5.1
         *
         * @return array
         */
        public static function get_enabled_payment_gateways()
        {
        }
        /**
         * Check if gateway is enabled for reverse withdrawal
         *
         * @since 3.5.1
         *
         * @return bool
         */
        public static function is_gateway_enabled_for_reverse_withdrawal($gateway)
        {
        }
        /**
         * Get reverse withdrawal billing type
         *
         * @since 3.5.1
         *
         * @return string
         */
        public static function get_billing_type()
        {
        }
        /**
         * Get reverse withdrawal threshold limit
         *
         * @since 3.5.1
         *
         * @return float
         */
        public static function get_reverse_balance_threshold()
        {
        }
        /**
         * Get reverse withdrawal billing day
         *
         * @since 3.5.1
         *
         * @return float
         */
        public static function get_billing_day()
        {
        }
        /**
         * Get reverse withdrawal billing day
         *
         * @since 3.5.1
         *
         * @return float
         */
        public static function get_due_period()
        {
        }
        /**
         * Get reverse withdrawal failed payment actions
         *
         * @since 3.5.1
         *
         * @return array
         */
        public static function get_failed_actions()
        {
        }
        /**
         * Check if action is enabled for reverse withdrawal
         *
         * @since 3.5.1
         *
         * @return bool
         */
        public static function is_failed_action_enabled($action)
        {
        }
        /**
         * Check if display notification is enabled during due period for reverse withdrawal
         *
         * @since 3.5.1
         *
         * @return bool
         */
        public static function display_payment_notice_on_vendor_dashboard()
        {
        }
        /**
         * Check if sending announcement is enabled during due period for reverse withdrawal
         *
         * @since 3.5.1
         *
         * @return bool
         */
        public static function send_balance_exceeded_announcement()
        {
        }
        /**
         * Get reverse withdrawal payment gateways
         *
         * @since 3.5.1
         *
         * @return array
         */
        public static function get_reverse_withrawal_payment_gateways()
        {
        }
        /**
         * Get reverse withdrawal billing type
         *
         * @since 3.5.1
         *
         * @return array
         */
        public static function get_billing_type_options()
        {
        }
        /**
         * Get reverse withdrawal failed payment actions
         *
         * @since 3.5.1
         *
         * @return array
         */
        public static function get_failed_payment_actions()
        {
        }
    }
}
namespace WeDevs\Dokan {
    /**
     * Dokan rewrite rules class
     *
     * @package Dokan
     */
    class Rewrites
    {
        public $query_vars = [];
        public $custom_store_url = '';
        /**
         * Hook into the functions
         */
        public function __construct()
        {
        }
        /**
         * Generate breadcrumb for store page
         *
         * @param array $crumbs
         *
         * @since 2.4.7
         *
         * @return void | array $crumbs
         */
        public function store_page_breadcrumb($crumbs)
        {
        }
        /**
         * Check if WooCommerce installed or not
         *
         * @return boolean
         */
        public function is_woo_installed()
        {
        }
        /**
         * Register the rewrite rule
         *
         * @return void
         */
        public function register_rule()
        {
        }
        /**
         * Resolve query var conflicts with WooCommerce
         *
         * @param array $query_vars
         *
         * @since 2.9.13
         *
         * @return array
         */
        public function resolve_wc_query_conflict($query_vars)
        {
        }
        /**
         * Register the query var
         *
         * @param array $vars
         *
         * @return array
         */
        public function register_query_var($vars)
        {
        }
        /**
         * Include store template
         *
         * @param type $template
         *
         * @return string
         */
        public function store_template($template)
        {
        }
        /**
         * Returns the terms_and_conditions template
         *
         * @param string $template
         *
         * @since 2.3
         *
         * @return string
         */
        public function store_toc_template($template)
        {
        }
        /**
         * Returns the edit product template
         *
         * @param string $template
         *
         * @return string
         */
        public function product_edit_template($template)
        {
        }
        /**
         * Remove h1 tag in edit product page.
         *
         * @param $args
         *
         * @return mixed
         */
        public function remove_h1_from_heading_in_edit_product_page($args)
        {
        }
        /**
         * Store query filter
         *
         * Handles the product filtering by category in store page
         *
         * @param object $query
         *
         * @return void
         */
        public function store_query_filter($query)
        {
        }
        /**
         * Returns an array of arguments for ordering products based on the selected values.
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param string $orderby Order by param
         * @param string $order Order param
         *
         * @return array
         */
        public function get_catalog_ordering_args($orderby = '', $order = '')
        {
        }
        /**
         * Handle numeric price sorting
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param array $args Query args
         *
         * @return array
         */
        public function order_by_price_asc_post_clauses($args)
        {
        }
        /**
         * Handle numeric price sorting
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param array $args Query args
         *
         * @return array
         */
        public function order_by_price_desc_post_clauses($args)
        {
        }
        /**
         * WP Core does not let us change the sort direction for individual orderby params
         *
         * This lets us sort by meta value desc, and have a second orderby param
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param array $args Query args
         *
         * @return array
         */
        public function order_by_popularity_post_clauses($args)
        {
        }
        /**
         * Order by rating post clauses
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param array $args Query args
         *
         * @return array
         */
        public function order_by_rating_post_clauses($args)
        {
        }
        /**
         * Join wc_product_meta_lookup to posts if not already joined.
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param string $sql SQL join
         *
         * @return string
         */
        private function append_product_sorting_table_join($sql)
        {
        }
    }
}
namespace WeDevs\Dokan\Shipping {
    /**
     * Shipping hooks class
     *
     * @since   3.7.19
     *
     * @package WeDevs\Dokan\Shipping
     */
    class Hooks
    {
        /**
         * Hooks constructor.
         *
         * @since 3.7.19
         */
        public function __construct()
        {
        }
        /**
         * Split shipping seller wise
         *
         * @since 3.7.19 Moved from pro.
         *
         * @param array $packages
         *
         * @return array
         */
        public function split_shipping_packages($packages)
        {
        }
        /**
         * Added shipping meta after order
         *
         * @since 3.7.19 Moved from pro.
         *
         * @param WC_Order_Item_Shipping $item        Shipping Line Item.
         * @param string                 $package_key Package key.
         * @param array                  $package     Package.
         * @param WC_Order               $order       Order.
         *
         * @return void
         */
        public function add_shipping_pack_meta($item, $package_key, $package, $order)
        {
        }
        /**
         * Set package wise seller name
         *
         * @since 3.7.19 Moved from pro.
         *
         * @param string  $title   Existing shipping pack name.
         * @param integer $i       Pack ID.
         * @param array   $package Shipping Package.
         *
         * @return string
         */
        public function change_shipping_pack_name($title, $i, $package)
        {
        }
    }
}
namespace WeDevs\Dokan\Shortcodes {
    class BestSellingProduct extends \WeDevs\Dokan\Abstracts\DokanShortcode
    {
        protected $shortcode = 'dokan-best-selling-product';
        /**
         * Render best selling products
         *
         * @param  array  $atts
         *
         * @return string
         */
        public function render_shortcode($atts)
        {
        }
    }
    class Dashboard extends \WeDevs\Dokan\Abstracts\DokanShortcode
    {
        protected $shortcode = 'dokan-dashboard';
        /**
         * Load template files
         *
         * Based on the query vars, load the appropriate template files
         * in the frontend user dashboard.
         *
         * @param array $atts
         *
         * @return string
         */
        public function render_shortcode($atts)
        {
        }
    }
    class MyOrders extends \WeDevs\Dokan\Abstracts\DokanShortcode
    {
        protected $shortcode = 'dokan-my-orders';
        /**
         * Render my orders page
         *
         * @return string
         */
        public function render_shortcode($atts)
        {
        }
    }
    class Shortcodes
    {
        private $shortcodes = [];
        /**
         *  Register Dokan shortcodes
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Get registered shortcode classes
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_shortcodes()
        {
        }
    }
    class Stores extends \WeDevs\Dokan\Abstracts\DokanShortcode
    {
        protected $shortcode = 'dokan-stores';
        /**
         * Displays the store lists
         *
         * @since 2.4
         *
         * @param  array $atts
         *
         * @return string
         */
        public function render_shortcode($atts)
        {
        }
    }
    class TopRatedProduct extends \WeDevs\Dokan\Abstracts\DokanShortcode
    {
        protected $shortcode = 'dokan-top-rated-product';
        /**
         * Render top rated products via shortcode
         *
         * @param array $atts
         *
         * @return string
         */
        public function render_shortcode($atts)
        {
        }
    }
    class VendorRegistration extends \WeDevs\Dokan\Abstracts\DokanShortcode
    {
        protected $shortcode = 'dokan-vendor-registration';
        /**
         * Vendor regsitration form shortcode callback
         *
         * @return string
         */
        public function render_shortcode($atts)
        {
        }
    }
}
namespace WeDevs\Dokan\ThemeSupport {
    /**
     * Astra Theme Support
     *
     * @since 3.1
     */
    class Astra
    {
        /**
         * The constructor
         */
        public function __construct()
        {
        }
        /**
         * Remove sidebar from store and dashboard page
         *
         * @param string $layout
         *
         * @return string
         */
        public function remove_sidebar($layout)
        {
        }
        public function payment_request_button_style()
        {
        }
    }
    /**
     * Divi Theme Support
     *
     * @see https://www.elegantthemes.com/gallery/divi/
     *
     * @since 3.0
     */
    class Divi
    {
        /**
         * The constructor
         */
        public function __construct()
        {
        }
        /**
         * Remove sidebar from store and dashboard page
         *
         * @return void
         */
        public function remove_sidebar()
        {
        }
        /**
         * Reset style
         *
         * @return void
         */
        public function style_reset()
        {
        }
        /**
         * Makes the store and dashboard page full width
         *
         * @param  array $classes
         *
         * @return array
         */
        public function full_width_page($classes)
        {
        }
        /**
         * Set current page for the query
         *
         * @since DOKAN_LITE_SINCE
         *
         * @see https://github.com/weDevsOfficial/dokan/issues/838
         *
         * @param \WP_Query $query
         * @param array $store_info
         *
         * @return void
         */
        public function set_current_page($query, $store_info)
        {
        }
        /**
         * Use divi theme assets when product is empty in store.
         *
         * @since 3.2.15
         *
         * @return void
         */
        public function use_dynamic_assets_for_empty_product()
        {
        }
    }
    /**
     * Electro Theme Support
     *
     * @see https://themeforest.net/item/electro-electronics-store-woocommerce-theme/15720624?ref=wedevs
     *
     * @since 2.9.30
     */
    class Electro
    {
        /**
         * The constructor
         */
        public function __construct()
        {
        }
        /**
         * Reset store listing style
         *
         * @since 2.9.30
         *
         * @return void
         */
        public function store_listing_style()
        {
        }
    }
    /**
     * Enfold Theme Support
     *
     * @see https://themeforest.net/item/enfold-responsive-multipurpose-theme/4519990?ref=wedevs
     *
     * @since 2.9.30
     */
    class Enfold
    {
        /**
         * The constructor
         */
        public function __construct()
        {
        }
        /**
         * Filter layout class
         *
         * @since  2.9.30
         *
         * @param  array $classes
         *
         * @return array
         */
        public function filter_layout_classes($classes)
        {
        }
        /**
         * Reset store listing style
         *
         * @since 2.9.30
         *
         * @return void
         */
        public function store_listing_style()
        {
        }
    }
    /**
     * Flatsome Theme Support
     *
     * @see https://themeforest.net/item/flatsome-multipurpose-responsive-woocommerce-theme/5484319?ref=wedevs
     *
     * @since 3.0
     */
    class Flatsome
    {
        /**
         * The constructor
         */
        public function __construct()
        {
        }
        /**
         * Enqueue registration scripts as it opens on popup
         *
         * @return void
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Store page fix
         *
         * @return void
         */
        public function store_page()
        {
        }
        /**
         * Product edit page
         *
         * @return void
         */
        public function edit_page()
        {
        }
        /**
         * Page wrapper div
         *
         * @return void
         */
        public function start_wrapper()
        {
        }
        /**
         * Wrapper div ends
         *
         * @return void
         */
        public function end_wrapper()
        {
        }
        /**
         * Reset store listing style
         *
         * @since 2.9.30
         *
         * @return void
         */
        public function store_listing_style()
        {
        }
    }
    /**
     * Dokan Theme Support
     *
     * @since 3.0
     *
     * @package Dokan
     */
    class Manager
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Include supported theme compatibility
         *
         * @return void
         */
        private function include_support()
        {
        }
        /**
         * Format theme name. ( Remove `-theme` from the string )
         *
         * @since  2.9.30
         *
         * @param  string $string
         *
         * @return string
         */
        private function format($string)
        {
        }
    }
    /**
     * Rehub Theme Support
     *
     * @since 2.9.17
     */
    class Rehub
    {
        /**
         * The constructor
         */
        public function __construct()
        {
        }
        /**
         * Remove hamburger menu
         *
         * @since 2.9.17
         *
         * @return boolean
         */
        public function load_hamburger_menu()
        {
        }
        /**
         * Make store listing page full width
         *
         * @since  3.0.0
         *
         * @return void
         */
        public function set_content_type()
        {
        }
    }
    /**
     * Storefront Theme Support
     *
     * @see https://woocommerce.com/storefront/
     *
     * @since 3.0
     */
    class Storefront
    {
        /**
         * The constructor
         */
        public function __construct()
        {
        }
        /**
         * Remove sidebar from store and dashboard page
         *
         * @return void
         */
        public function remove_sidebar()
        {
        }
        /**
         * Makes the store and dashboard page full width
         *
         * @param  array $classes
         *
         * @return array
         */
        public function full_width_page($classes)
        {
        }
        /**
         * Reset style
         *
         * @since  2.9.30
         *
         * @return void
         */
        public function reset_style()
        {
        }
    }
    /**
     * Twenty Twenty Theme Support
     *
     * @since 3.1
     */
    class TwentyTwenty
    {
        /**
         * The constructor
         */
        public function __construct()
        {
        }
        /**
         * Makes the store page full width
         *
         * @param  array $classes
         *
         * @return array
         */
        public function add_wc_class($classes)
        {
        }
    }
}
namespace WeDevs\Dokan {
    /**
     * Dokan tracker
     *
     * @since 2.4.11
     * @since 2.8.7 Using AppSero\Insights for tracking
     */
    class Tracker
    {
        /**
         * Insights class
         *
         * @var \Appsero\Insights
         */
        public $insights = null;
        /**
         * Class constructor
         *
         * @return void
         * @since 2.8.7
         *
         */
        public function __construct()
        {
        }
        /**
         * Initialize the plugin tracker
         *
         * @return void
         * @since 2.8.7
         *
         */
        public function appsero_init_tracker_dokan()
        {
        }
        /**
         * Get number of orders
         *
         * @return int
         */
        protected function get_order_count()
        {
        }
        /**
         * Gets custom deactivation reasons
         *
         * @param string[] $reasons
         * @param null|\AppSero\Client $client
         *
         * @return \array
         * @since 3.0.15
         *
         */
        public function get_custom_deactivation_reasons($reasons, $client = null)
        {
        }
    }
}
namespace WeDevs\Dokan\Traits {
    /**
     * Singleton Trait
     *
     * @since 1.0.0
     */
    trait Singleton
    {
        /**
         * Singleton class instance holder
         *
         * @since 1.0.0
         *
         * @var static
         */
        protected static $instance;
        /**
         * Make a class instance
         *
         * @since 1.0.0
         *
         * @return static
         */
        public static function instance()
        {
        }
    }
}
namespace WeDevs\Dokan\Upgrade {
    class AdminNotice
    {
        use \WeDevs\Dokan\Traits\AjaxResponseError;
        /**
         * Show admin notice to upgrade Dokan
         *
         * @since 3.0.0
         *
         * @param array $notices
         *
         * @return array
         */
        public static function show_notice($notices)
        {
        }
        /**
         * Ajax handler method to initiate Dokan upgrade process
         *
         * @since 3.0.0
         *
         * @return void
         */
        public static function do_upgrade()
        {
        }
    }
    class Hooks
    {
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function __construct()
        {
        }
    }
    class Manager
    {
        private $is_upgrading_db_key = 'dokan_is_upgrading_db';
        /**
         * Checks if update is required or not
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function is_upgrade_required()
        {
        }
        /**
         * Checks for any ongoing process
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function has_ongoing_process()
        {
        }
        /**
         * Get upgradable upgrades
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_upgrades()
        {
        }
        /**
         * Run upgrades
         *
         * This will execute every method found in a
         * upgrader class, execute `run` method defined
         * in `DokanUpgrader` abstract class and then finally,
         * `update_db_version` will update the db version
         * reference in database.
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function do_upgrade()
        {
        }
    }
    class Upgrades
    {
        /**
         * Dokan Lite upgraders
         *
         * @since 3.0.0
         *
         * @var array
         */
        private static $upgrades = ['1.2' => \WeDevs\Dokan\Upgrade\Upgrades\V_1_2::class, '2.1' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_1::class, '2.3' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_3::class, '2.4.11' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_4_11::class, '2.4.12' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_4_12::class, '2.5.7' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_5_7::class, '2.6.9' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_6_9::class, '2.7.3' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_7_3::class, '2.7.6' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_7_6::class, '2.8.0' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_8_0::class, '2.8.3' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_8_3::class, '2.8.6' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_8_6::class, '2.9.4' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_9_4::class, '2.9.13' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_9_13::class, '2.9.16' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_9_16::class, '2.9.19' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_9_19::class, '2.9.23' => \WeDevs\Dokan\Upgrade\Upgrades\V_2_9_23::class, '3.0.4' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_0_4::class, '3.0.10' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_0_10::class, '3.1.0' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_1_0::class, '3.1.1' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_1_1::class, '3.2.12' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_2_12::class, '3.3.1' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_3_1::class, '3.3.7' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_3_7::class, '3.3.8' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_3_8::class, '3.5.1' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_5_1::class, '3.6.2' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_6_2::class, '3.6.4' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_6_4::class, '3.6.5' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_6_5::class, '3.7.10' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_7_10::class, '3.7.19' => \WeDevs\Dokan\Upgrade\Upgrades\V_3_7_19::class];
        /**
         * Get DB installed version number
         *
         * @since 3.0.0
         *
         * @return string
         */
        public static function get_db_installed_version()
        {
        }
        /**
         * Checks if upgrade is required or not
         *
         * @since 3.0.0
         *
         * @param bool $is_required
         *
         * @return bool
         */
        public static function is_upgrade_required($is_required = false)
        {
        }
        /**
         * Update Dokan DB version
         *
         * @since 3.0.0
         *
         * @return void
         */
        public static function update_db_dokan_version()
        {
        }
        /**
         * Get upgrades
         *
         * @since 3.0.0
         *
         * @param array $upgrades
         *
         * @return array
         */
        public static function get_upgrades($upgrades = [])
        {
        }
    }
}
namespace WeDevs\Dokan\Upgrade\Upgrades\BackgroundProcesses {
    /**
     * Update vendor and product geolocation data
     *
     * @since 2.8.6
     */
    class V_2_8_3_VendorBalance extends \WeDevs\Dokan\Abstracts\DokanBackgroundProcesses
    {
        /**
         * Perform updates
         *
         * @since 2.8.6
         *
         * @param mixed $item
         *
         * @return mixed
         */
        public function task($item)
        {
        }
        /**
         * Add new table for vendor-balance
         *
         * @since 2.8.3
         *
         * @return void
         */
        private function create_vendor_balance_table_283()
        {
        }
        /**
         * Get order table data
         */
        private function migrate_order_data_283($paged)
        {
        }
        /**
         * Get withdraw table data
         */
        private function migrate_withdraw_data_283($paged)
        {
        }
        /**
         * Get insert vendor_balance table data
         */
        private function insert_vendor_balance_data_283($data)
        {
        }
    }
    /**
     * Dokan 2.9.4 updater class
     *
     * @since 2.9.4
     */
    class V_2_9_4_OrderPostAuthor extends \WeDevs\Dokan\Abstracts\DokanBackgroundProcesses
    {
        /**
         * Perform updates
         *
         * @since 2.9.4
         *
         * @param mixed $item
         *
         * @return mixed
         */
        public function task($item)
        {
        }
        /**
         * Update shop_order post author
         *
         * @since 2.9.4
         *
         * @return array
         */
        private function update_shop_order_post_author($paged)
        {
        }
    }
    /**
     * Dokan 2.9.16 updater class
     *
     * @since 2.9.16
     */
    class V_2_9_16_StoreSettings extends \WeDevs\Dokan\Abstracts\DokanBackgroundProcesses
    {
        /**
         * Perform updates
         *
         * @since 2.9.16
         *
         * @param mixed $item
         *
         * @return mixed
         */
        public function task($item)
        {
        }
        /**
         * Update store settings
         *
         * @since 2.9.16
         *
         * @return void
         */
        private function update_store_settings($paged)
        {
        }
    }
    /**
     * Dokan store name updater class
     *
     * @since 2.9.23
     */
    class V_2_9_23_StoreName extends \WeDevs\Dokan\Abstracts\DokanBackgroundProcesses
    {
        /**
         * Perform updates
         *
         * @since 2.9.23
         *
         * @param mixed $item
         *
         * @return mixed
         */
        public function task($item)
        {
        }
        /**
         * Update store settings
         *
         * @since 2.9.23
         *
         * @return void|array
         */
        private function update_store_name($paged)
        {
        }
    }
    /**
     * Dokan Product attribute author id updater class
     *
     * @since DOKAN_LITE_SINCE
     */
    class V_3_0_10_ProductAttributesAuthorId extends \WeDevs\Dokan\Abstracts\DokanBackgroundProcesses
    {
        /**
         * Perform updates
         *
         * @param mixed $item
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return mixed
         */
        public function task($item)
        {
        }
        /**
         * Update product attribute author
         * if its not same as product author id
         *
         * @param $paged
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return array|boolean
         */
        private function update_product_attribute_author($paged)
        {
        }
    }
    /**
     * Dokan Product attribute author id updater class
     *
     * @since DOKAN_LITE_SINCE
     */
    class V_3_1_1_RefundTableUpdate extends \WeDevs\Dokan\Abstracts\DokanBackgroundProcesses
    {
        /**
         * Action
         *
         * @since 3.1.1
         *
         * @var string
         */
        protected $action = 'dokan_upgrade_bp_3_1_1';
        /**
         * Perform updates
         *
         * @param mixed $item
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return mixed
         */
        public function task($db_data)
        {
        }
    }
    /**
     * Dokan vendor store times upgrader class.
     *
     * @since 3.3.8
     */
    class V_3_3_8_VendorStoreTimes extends \WeDevs\Dokan\Abstracts\DokanBackgroundProcesses
    {
        /**
         * Update vendors store time.
         *
         * @param array $vendors
         *
         * @since 3.3.8
         *
         * @return bool
         */
        public function task($vendors)
        {
        }
    }
    /**
     * Select all parent categories based on child category id.
     *
     * @since 3.6.2
     */
    class V_3_6_2_UpdateProductCategories extends \WeDevs\Dokan\Abstracts\DokanBackgroundProcesses
    {
        /**
         * Save all ancestors ids based on child id.
         *
         * @param array $products
         *
         * @since 3.6.2
         *
         * @return bool
         */
        public function task($products)
        {
        }
    }
    /**
     * Set additional order meta `shipping_tax_fee_recipient`.
     *
     * @since 3.7.19
     */
    class V_3_7_19_UpdateOrderMeta extends \WeDevs\Dokan\Abstracts\DokanBackgroundProcesses
    {
        /**
         * Save order meta `shipping_tax_fee_recipient`.
         *
         * @param array $orders
         *
         * @since 3.7.19
         *
         * @return bool
         */
        public function task($orders)
        {
        }
    }
}
namespace WeDevs\Dokan\Upgrade\Upgrades {
    class V_1_2 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        public static function generate_sync_table()
        {
        }
        /**
         * Generate dokan sync table
         *
         * @since 3.8.0 moved from includes/functions.php file
         *
         * @deprecated since 2.4.3
         */
        private static function dokan_generate_sync_table()
        {
        }
    }
    class V_2_1 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        public static function create_announcement_table()
        {
        }
    }
    class V_2_3 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Upgrade necessary meta for
         * new product design
         *
         * @since 2.3
         *
         * @return void
         */
        public static function upgrade_product_meta()
        {
        }
        /**
         * Upgrade store meta for sellers
         * and replace old address meta with new address meta
         *
         * @since 2.3
         *
         * @return void
         */
        public static function upgrade_store_meta()
        {
        }
    }
    class V_2_4_11 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Upgrade capabilities for sellers
         *
         * @since 2.4.11
         *
         * @return void
         */
        public static function upgrade_seller_capability()
        {
        }
        /**
         * Add new table for refund request
         *
         * @since 2.4.11
         *
         * @return void
         */
        public static function create_refund_table()
        {
        }
    }
    class V_2_4_12 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Upgrade meta for sellers
         *
         * @since 2.4.12
         *
         * @return void
         */
        public static function upgrade_seller_meta()
        {
        }
    }
    class V_2_5_7 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        public static function remove_notice_meta()
        {
        }
    }
    class V_2_6_9 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        public static function update_user_capability()
        {
        }
        public static function replace_seller_commission()
        {
        }
        public static function replace_seller_commission_by_seller()
        {
        }
        public static function replace_product_commissions()
        {
        }
        public static function replace_category_commission_meta()
        {
        }
    }
    class V_2_7_3 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Save admin fee as meta for existing sub-orders
         */
        public static function update_order_meta()
        {
        }
        /**
         * Modify column structure to support upto 4 decimals
         */
        public static function update_table_structure()
        {
        }
        /**
         * Update seller capabilities
         *
         * @since 2.7.3
         *
         * @return void
         */
        public static function update_user_capabilities()
        {
        }
    }
    class V_2_7_6 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Modify ip column to support the max possible length of IPv6
         */
        public static function update_table_structure()
        {
        }
        public static function update_user_capabilities()
        {
        }
    }
    class V_2_8_0 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Remove product_style option from database
         */
        public static function remove_product_style_option()
        {
        }
    }
    class V_2_8_3 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Add new table for vendor-balance
         *
         * @since 2.8.3
         *
         * @return void
         */
        public static function create_vendor_balance_table_283()
        {
        }
    }
    class V_2_8_6 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Update extra fee recipient settings
         *
         * @since 2.8.6
         *
         * @return void
         */
        public static function update_fees_recipient()
        {
        }
    }
    class V_2_9_4 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Update post_author id for shop_orders
         *
         * @since 2.9.4
         *
         * @return void
         */
        public static function update_shop_order_post_author()
        {
        }
        /**
         * Update refund table structure
         *
         * @return void
         */
        public static function update_refund_table()
        {
        }
    }
    class V_2_9_13 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Update single product multi vendor module table
         *
         * @return void
         */
        public static function update_spmv_product_map_table()
        {
        }
    }
    class V_2_9_16 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Update update store settings
         *
         * @since 2.9.16
         *
         * @return void
         */
        public static function update_store_settings()
        {
        }
    }
    class V_2_9_19 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        public static function dokan_update_admin_settings_next()
        {
        }
    }
    class V_2_9_23 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Update update store settings
         *
         * @since 2.9.23
         *
         * @return void
         */
        public static function dokan_update_store_name()
        {
        }
    }
    class V_3_0_4 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Get table_name and columns in key value pair
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return array
         */
        public static function get_tables()
        {
        }
        /**
         * Update various dokan tables
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return void
         */
        public static function update_dokan_tables()
        {
        }
    }
    class V_3_0_10 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Update product attribute id to same as product author id
         *
         * @return void
         */
        public static function update_product_attributes_author_id()
        {
        }
    }
    class V_3_1_0 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Remove any numeric indexed data from withdraw_methods added due to dokan setup wizard
         *
         * @return void
         */
        public static function update_dokan_withdraw_methods()
        {
        }
    }
    class V_3_1_1 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Update dokan refund table fields item_totals and item_tax_totals
         *
         * @return void
         */
        public static function update_dokan_refund_table()
        {
        }
    }
    class V_3_2_12 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Update withdraw table for add new `details` column
         *
         * @since 3.2.12
         *
         * @return void
         */
        public static function update_dokan_withdraw_table()
        {
        }
        /** Update store name meta data
         *
         * @since 3.2.12
         *
         * @return void
         */
        public static function dokan_update_store_name()
        {
        }
    }
    class V_3_3_1 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Updates withdraw database table column
         *
         * @since 3.3.1
         *
         * @return void
         */
        public static function update_withdraw_table_column()
        {
        }
        /**
         * Updates refund database table column
         *
         * @since 3.3.1
         *
         * @return void
         */
        public static function update_refund_table_column()
        {
        }
        /**
         * This will add installed time for existing users
         *
         * @since 3.3.1
         *
         * @return void
         */
        public static function add_version_info()
        {
        }
    }
    class V_3_3_7 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Updates withdraw database table column. Before on dokan_withdraw
         * table details column it was set longtext NOT NUll, now we are setting it null by default.
         *
         * @since 3.3.7
         *
         * @return void
         */
        public static function update_withdraw_table_column()
        {
        }
        /**
         * Flush rewrite rules so that new menu is visible without permalink reset
         *
         * @since 3..3.7
         *
         * @return void
         */
        public static function flush_rewrite_rules()
        {
        }
    }
    class V_3_3_8 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Updates usermeta database table column. Before on,
         * store time gets single data in usermeta. Now, we
         * are setting data as array for multiple store times.
         *
         * @since 3.3.8
         *
         * @return void
         */
        public static function update_withdraw_table_column()
        {
        }
    }
    /**
     * @since 3.5.1
     */
    class V_3_5_1 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Create Reverse Withdrawal Table
         *
         * @since 3.5.1
         *
         * @return void
         */
        public static function install_advertisement_table()
        {
        }
        /**
         * This method will create reverse withdrawal base product
         *
         * @since 3.5.1
         *
         * @return void
         */
        public static function create_reverse_withdrawal_base_product()
        {
        }
        /**
         * Flush rewrite rules
         *
         * @since 3.5.1
         *
         * @return void
         */
        public static function flush_rewrite_rules()
        {
        }
    }
    class V_3_6_2 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Updates product categories.
         * For every child category, it will update the parent categories and ancestors.
         *
         * @since 3.6.2
         *
         * @return void
         */
        public static function update_products_categories()
        {
        }
    }
    class V_3_6_4 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Remove unfiltered_html capabilities from vendor roles
         *
         * @since 3.6.4
         *
         * @return void
         */
        public static function remove_unfiltered_html_capabilities_from_vendor()
        {
        }
    }
    class V_3_6_5 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Delete product category cache
         *
         * @since 3.6.5
         *
         * @return void
         */
        public static function clear_multistep_category_cache()
        {
        }
    }
    /**
     * Upgrader Class.
     *
     * @since DOKAN_LITE_SINCE
     */
    class V_3_7_10 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Rewrite variable product variations author IDs.
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return void
         */
        public static function rewrite_variable_product_variations_author_ids()
        {
        }
    }
    class V_3_7_19 extends \WeDevs\Dokan\Abstracts\DokanUpgrader
    {
        /**
         * Update Order meta.
         * Add new meta `shipping_tax_fee_recipient`
         *
         * @since 3.7.19
         *
         * @return void
         */
        public static function update_order_meta()
        {
        }
    }
}
namespace WeDevs\Dokan\Utilities {
    class OrderUtil
    {
        /**
         * Helper function to get whether custom order tables are enabled or not.
         *
         * This method can be removed, and we can directly use WC OrderUtil::custom_orders_table_usage_is_enabled method in future
         * if we set the minimum wc version requirements to 8.0
         *
         * @since 3.8.0
         *
         * @return bool
         */
        public static function is_hpos_enabled() : bool
        {
        }
        /**
         * Checks if posts and order custom table sync are enabled, and there are no pending orders.
         *
         * @since 3.8.0
         *
         * @return bool
         */
        public static function is_custom_order_tables_in_sync() : bool
        {
        }
        /**
         * Helper function to get whether the order cache should be used or not.
         *
         * @since 3.8.0
         *
         * @return bool True if the order cache should be used, false otherwise.
         */
        public static function is_order_cache_usages_enabled() : bool
        {
        }
        /**
         * Helper function to initialize the global $theorder object, mostly used during order meta boxes rendering.
         *
         * @since 3.8.0
         *
         * @param WC_Order|WP_Post $post_or_order_object Post or order object.
         *
         * @return WC_Order_Refund|bool|WC_Order WC_Order object.
         */
        public static function init_theorder_object($post_or_order_object)
        {
        }
        /**
         * Helper function to id from a post or order object.
         *
         * @since 3.8.0
         *
         * @param WP_Post|WC_Order $post_or_order_object WP_Post/WC_Order object to get ID for.
         *
         * @return int Order or post ID.
         */
        public static function get_post_or_order_id($post_or_order_object) : int
        {
        }
        /**
         * Checks if passed id, post or order object is a WC_Order object.
         *
         * This method can be removed, and we can directly use WC OrderUtil::is_order method in future
         * if we set the minimum wc version requirements to 8.0
         *
         * @since 3.8.0
         *
         * @param int|WP_Post|WC_Order $order_id Order ID, post object or order object.
         * @param string[]             $types    Types to match against.
         *
         * @return bool Whether the passed param is an order.
         */
        public static function is_order($order_id, $types = []) : bool
        {
        }
        /**
         * Helper function to get the screen name of order page in wp-admin.
         *
         * This method can be removed, and we can directly use WC OrderUtil::get_order_admin_screen method in future
         * if we set minimum wc version requirements to 8.0
         *
         * @since 3.8.0
         *
         * @return string
         */
        public static function get_order_admin_screen() : string
        {
        }
        /**
         * Get admin order list page url
         *
         * @since 3.8.0
         *
         * @return string
         */
        public static function get_admin_order_list_url() : string
        {
        }
        /**
         * Helper method to generate admin URL for new order.
         *
         * @since 3.8.0
         *
         * @return string Link for new order.
         */
        public static function get_order_admin_new_url() : string
        {
        }
        /**
         * Get admin order edit page url
         *
         * @since 3.8.0
         *
         * @param int $order_id
         *
         * @return string
         */
        public static function get_admin_order_edit_url($order_id = 0) : string
        {
        }
        /**
         * Get the custom orders table name for wc.
         *
         * @since 3.8.0
         *
         * @return string
         */
        public static function get_order_table_name()
        {
        }
        /**
         * Get the name of the database table that's currently in use for orders.
         *
         * @since 3.8.0
         *
         * @return string
         */
        public static function get_table_for_order_meta()
        {
        }
    }
}
namespace WeDevs\Dokan\Vendor {
    /**
     * Change product status
     *
     * @since 3.7.18
     */
    class ChangeProductStatus extends \WeDevs\Dokan\Abstracts\ProductStatusChanger
    {
        /**
         * Get products
         *
         * @since 3.7.18
         *
         * @return int[]
         */
        public function get_products()
        {
        }
    }
    class Hooks
    {
        /**
         * Class constructor
         *
         * @since 3.3.2 Added Cache
         *
         * @return void
         */
        public function __construct()
        {
        }
    }
    /**
     * Vendor Manager Class
     *
     * @since 2.6.10
     */
    class Manager
    {
        /**
         * Total vendors found
         *
         * @var integer
         */
        private $total_users;
        /**
         * Get all vendors
         *
         * @param array $args
         *
         * @since 2.8.0
         *
         * @return array
         */
        public function all($args = [])
        {
        }
        /**
         * Get vendors
         *
         * @param array $args
         *
         * @return array
         */
        public function get_vendors($args = [])
        {
        }
        /**
         * Get total user according to query
         *
         * @since 1.0.0
         *
         * @return int
         */
        public function get_total()
        {
        }
        /**
         * Get single vendor data
         *
         * @param object|integer $vendor
         *
         * @return object|Vendor instance
         */
        public function get($vendor)
        {
        }
        /**
         * Create a vendor
         *
         * @param array $data
         *
         * @return Vendor|WP_Error on failure
         */
        public function create($data = [])
        {
        }
        /**
         * Update a vendor
         *
         * @param int $vendor_id
         *
         * @param array $data
         *
         * @return object
         */
        public function update($vendor_id, $data = [])
        {
        }
        /**
         * Delete vendor with reassign data
         *
         * @param $vendor_id
         * @param null $reassign
         *
         * @since 2.9.11
         *
         * @return array
         */
        public function delete($vendor_id, $reassign = null)
        {
        }
        /**
         * Get all featured Vendor
         *
         * @param array $args
         *
         * @return array
         */
        public function get_featured($args = [])
        {
        }
    }
}
namespace WeDevs\Dokan\Vendor\SettingsApi\Abstracts {
    /**
     * Vendor Settings Payment processor.
     *
     * @since 3.7.10
     */
    abstract class Gateways
    {
        /**
         * Hook Order for setting rendering.
         *
         * @var int
         */
        protected $hook_order = 10;
        /**
         * Settings Group Key for setting rendering.
         *
         * @var string
         */
        protected $group = '';
        /**
         * Constructor function.
         */
        public function __construct()
        {
        }
        /**
         * Render the settings page with tab, cad, fields.
         *
         * @since 3.7.10
         *
         * @param array $settings Settings to render.
         *
         * @return array
         */
        public abstract function render_settings(array $settings) : array;
    }
    /**
     * Vendor Settings Page.
     */
    abstract class Page
    {
        /**
         * Hook Order for setting rendering.
         *
         * @var int
         */
        protected $hook_order = 10;
        /**
         * Settings Group Key for setting rendering.
         *
         * @var string
         */
        protected $group = '';
        /**
         * Constructor function.
         */
        public function __construct()
        {
        }
        /**
         * Render the settings page with tab, cad, fields.
         *
         * @since 3.7.10
         *
         * @param array $settings Settings to render.
         *
         * @return array
         */
        public abstract function render_settings(array $settings) : array;
        /**
         * Render the settings page with tab, cad, fields.
         *
         * @since 3.7.10
         *
         * @param array $groups Settings Group or page to render.
         *
         * @return array
         */
        public abstract function render_group(array $groups) : array;
    }
}
namespace WeDevs\Dokan\Vendor\SettingsApi {
    /**
     * Vendor Settings API Manager.
     *
     * @since 3.7.10
     */
    class Manager
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialize the class instance.
         *
         * @since 3.7.10
         *
         * @return void
         */
        private function init()
        {
        }
    }
    /**
     * Dokan Vendor Settings API Processor.
     *
     * @since 3.7.10
     */
    class Processor
    {
        /**
         * The Vendor Of the Settings.
         *
         * @since 3.7.10
         *
         * @var Vendor
         */
        protected $vendor;
        /**
         * Constructor.
         *
         * @param int $vendor Vendor ID.
         *
         * @return void
         */
        public function __construct($vendor = 0)
        {
        }
        /**
         * Get main Settings page list.
         *
         * @since 3.7.10
         *
         * @return array
         */
        public function get_settings_page_list()
        {
        }
        /**
         * Get settings Group or page.
         *
         * @param string $group_id Group or page ID.
         *
         * @return array|WP_Error
         */
        public function get_settings_group(string $group_id)
        {
        }
        /**
         * Get A single Settings Element.
         *
         * @since 3.7.10
         *
         * @param string $group_id Group or page key.
         * @param string $id Settings Element id.
         *
         * @return array|WP_Error
         */
        public function get_single_settings(string $group_id, string $id)
        {
        }
        /**
         * Get Single Settings Fiend from a settings Section.
         *
         * @since 3.7.10
         *
         * @param string $group_id Group or page key.
         * @param string $parent_id Settings Element ID.
         * @param string $id Settings Element Field ID.
         *
         * @return array|WP_Error
         */
        public function get_single_settings_field(string $group_id, string $parent_id, string $id)
        {
        }
        /**
         * Populate settings link section.
         *
         * @param array $settings Settings array.
         *
         * @return array
         */
        public function populate_settings_links_value($settings)
        {
        }
        /**
         * Populate settings link section.
         *
         * @param array $settings Settings Element.
         *
         * @return array
         */
        public function populate_single_settings_links_value($settings)
        {
        }
        /**
         * Populate value and active state for every payment fields.
         *
         * @param array $settings Single settings field.
         *
         * @return array
         */
        public function populate_settings_elements($settings)
        {
        }
        /**
         * Format and validate Settings Elements.
         *
         * @param string $settings_group_id Settings elements group ID.
         * @param array  $settings_values Settings elements.
         *
         * @return array
         * @throws Exception If settings is not found.
         */
        public function format_settings_elements_for_saving(string $settings_group_id, array $settings_values)
        {
        }
        /**
         * Save settings group value.
         *
         * @since 3.7.10
         *
         * @param array $settings Settings to save.
         * @param string $group_id Settings group ID.
         *
         * @return array|WP_Error
         */
        public function save_settings_group(array $settings, string $group_id)
        {
        }
        /**
         * Save settings child value.
         *
         * @param string $group_id Group identifier.
         * @param string $id Settings elements identifier.
         * @param mixed $value Settings elements value to save.
         *
         * @return array|WP_Error
         */
        public function save_single_settings(string $group_id, string $id, $value)
        {
        }
        /**
         * Save settings child value.
         *
         * @param string $group_id Group identifier.
         * @param string $settings_id Settings identifier.
         * @param string $field_id Field identifier.
         * @param mixed $value Value to save.
         *
         * @return array|WP_Error
         */
        public function save_single_settings_field(string $group_id, string $settings_id, string $field_id, $value)
        {
        }
        /**
         * Search Group by Group or page key.
         *
         * @since 3.7.10
         *
         * @param string $group_id Group or page key.
         *
         * @return bool|WP_Error
         */
        protected function search_group(string $group_id)
        {
        }
        /**
         * Search Single Settings.
         *
         * @since 3.7.10
         *
         * @param string $group_id Group or page key.
         * @param string $id Settings Element id.
         *
         * @return mixed|WP_Error
         */
        protected function search_single_settings(string $group_id, string $id)
        {
        }
    }
}
namespace WeDevs\Dokan\Vendor\SettingsApi\Settings\Pages\Payments\Gateways {
    /**
     * Payment processor Bank.
     *
     * @since 3.7.10
     */
    class Bank extends \WeDevs\Dokan\Vendor\SettingsApi\Abstracts\Gateways
    {
        /**
         * Render the settings page for bank.
         *
         * @since 3.7.10
         *
         * @param array $settings Settings to render.
         *
         * @return array
         */
        public function render_settings(array $settings) : array
        {
        }
    }
    /**
     * Payment processor PayPal.
     *
     * @since 3.7.10
     */
    class PayPal extends \WeDevs\Dokan\Vendor\SettingsApi\Abstracts\Gateways
    {
        /**
         * Render the settings for PayPal.
         *
         * @since 3.7.10
         *
         * @param array $settings Settings to render.
         *
         * @return array
         */
        public function render_settings(array $settings) : array
        {
        }
    }
}
namespace WeDevs\Dokan\Vendor\SettingsApi\Settings\Pages\Payments {
    /**
     * Payment Settings API Page.
     *
     * @since 3.7.10
     */
    class Payments extends \WeDevs\Dokan\Vendor\SettingsApi\Abstracts\Page
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Group or page key.
         *
         * @var string $group Group or page key.
         */
        protected $group = 'payment';
        /**
         * Render the settings page with tab, cad, fields.
         *
         * @since 3.7.10
         *
         * @param array $groups Settings Group or page to render.
         *
         * @return array
         */
        public function render_group(array $groups) : array
        {
        }
        /**
         * Render the payment settings page.
         *
         * @since 3.7.10
         */
        public function render_settings(array $settings) : array
        {
        }
        /**
         * Set the active payment processor status.
         *
         * @since 3.7.10
         *
         * @param array $settings Settings Element.
         *
         * @return array
         */
        public function set_active_payment_methods_status(array $settings, array $settings_values, string $parent_id)
        {
        }
    }
}
namespace WeDevs\Dokan\Vendor\SettingsApi\Settings\Pages {
    class Store extends \WeDevs\Dokan\Vendor\SettingsApi\Abstracts\Page
    {
        /**
         * Group or page key.
         *
         * @var string $group Group or page key.
         */
        protected $group = 'store';
        /**
         * Render the settings page with tab, cad, fields.
         *
         * @since 3.7.10
         *
         * @param array $groups Settings Group or page to render.
         *
         * @return array
         */
        public function render_group(array $groups) : array
        {
        }
        /**
         * Render the store settings page.
         *
         * @since 3.7.10
         */
        public function render_settings(array $settings) : array
        {
        }
    }
}
namespace WeDevs\Dokan\Vendor {
    /**
     * Store Lists Class
     *
     * @since 2.9.30
     */
    class StoreListsFilter
    {
        /**
         * WP_User_Query holder
         *
         * @var object
         */
        private $query;
        /**
         * Orderby holder
         *
         * @var string
         */
        private $orderby;
        /**
         * Boot method
         *
         * @since  2.9.30
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Maybe disable the store lists filter form
         *
         * @since  2.9.30
         *
         * @return void
         */
        public function maybe_disable_stote_lists_filter()
        {
        }
        /**
         * Filter area
         *
         * @since  2.9.30
         *
         * @param  WP_Users $stores
         *
         * @return void
         */
        public function filter_area($stores)
        {
        }
        /**
         * Get sort by options
         *
         * @since  2.9.30
         *
         * @return array
         */
        public static function sort_by_options()
        {
        }
        /**
         * Filter pre user query
         *
         * @since  2.9.30
         *
         * @param  array $args
         * @param  array $request
         *
         * @return array
         */
        public function filter_pre_user_query($args, $request)
        {
        }
        /**
         * Filter user query
         *
         * @since  2.9.30
         *
         * @param  WP_User_Query
         *
         * @return void
         */
        public function filter_user_query($query)
        {
        }
        /**
         * Filter query form
         *
         * @since  2.9.30
         *
         * @return void
         */
        private function filter_query_from()
        {
        }
        /**
         * Filter query orderby
         *
         * @since  2.9.30
         *
         * @return void
         */
        private function filter_query_orderby()
        {
        }
    }
    /**
    * User Switching functionality
    *
    * @since  DOKAN_LITE_SINCE
    */
    class UserSwitch
    {
        /**
         * Load automatically when class initiate
         *
         * @since DOKAN_LITE_SINCE
         */
        public function __construct()
        {
        }
        /**
         * Is feature active or not
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return boolean
         */
        public function is_feature_active()
        {
        }
        /**
         * Add localize scription for loading if feature available or not
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return array
         */
        public function add_localize_data($localize_data)
        {
        }
        /**
         * Populate switch url for user
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return array
         */
        public function populate_switch_url($data, $store, $request)
        {
        }
        /**
         * Switch to or Switch Back to user message in vendor dashboard
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return void
         */
        public function show_user_switching_message()
        {
        }
    }
    /**
     * Vendor Cache class.
     *
     * Manage all of the caches for vendor.
     *
     * @since 3.3.2
     *
     * @see \WeDevs\Dokan\Cache
     */
    class VendorCache
    {
        public function __construct()
        {
        }
        /**
         * Clear vendor cache group.
         *
         * @since 3.3.2
         *
         * @return void
         */
        public static function delete()
        {
        }
        /**
         * Clear Vendor Cache Group.
         *
         * @since 3.3.2
         *
         * @param int $vendor_id
         *
         * @return void
         */
        public function clear_cache_group($vendor_id)
        {
        }
        /**
         * Clear Vendor Cache Group after vendor profile update.
         *
         * @since 3.3.2
         *
         * @param int   $store_id
         * @param array $dokan_settings
         *
         * @return void
         */
        public function after_update_vendor_profile($store_id, $dokan_settings)
        {
        }
        /**
         * Clear Vendor Cache Group after changing wp_user.
         *
         * @since 3.3.5
         *
         * @param int  $user_id
         * @param bool $is_user_delete; if user deletes, pass it to true. default - false
         *
         * @return void
         */
        private function clear_wp_user_cache($user_id, $is_user_delete = false)
        {
        }
        /**
         * Clear Vendor Cache Group after new user added to wp user.
         *
         * @since 3.3.2
         *
         * @param int $user_id
         *
         * @return void
         */
        public function after_created_new_wp_user($user_id)
        {
        }
        /**
         * Clear Vendor Cache Group after updated wp user.
         *
         * @since 3.3.5
         *
         * @param int   $user_id
         * @param array $old_user_data
         *
         * @return void
         */
        public function after_updated_wp_user($user_id, $old_user_data)
        {
        }
        /**
         * Clear Vendor Cache Group before deleting wp user.
         *
         * @since 3.3.5
         *
         * @param int   $user_id
         * @param array $reassign
         *
         * @return void
         */
        public function before_deleting_wp_user($user_id, $reassign)
        {
        }
    }
}
namespace WeDevs\Dokan\Walkers {
    class TaxonomyDropdown extends \Walker
    {
        /**
         * @see Walker::$tree_type
         *
         * @var string
         */
        public $tree_type = 'category';
        /**
         * @see Walker::$db_fields
         *
         * @var array
         */
        public $db_fields = ['parent' => 'parent', 'id' => 'term_id'];
        /**
         * Post id
         *
         * @var int
         */
        private $post_id = '';
        /**
         * Constructor method
         *
         * @param int $post_id
         */
        public function __construct($post_id = 0)
        {
        }
        /**
         * Start element
         *
         * @param string $output
         * @param object $category
         * @param int    $depth
         * @param array  $args
         * @param int    $id
         *
         * @return void
         */
        public function start_el(&$output, $category, $depth = 0, $args = [], $id = 0)
        {
        }
    }
    class CategoryDropdownSingle extends \WeDevs\Dokan\Walkers\TaxonomyDropdown
    {
        private $post_id = '';
        /**
         * @see Walker::$db_fields
         * @var array
         */
        public $db_fields = array('parent' => 'parent', 'id' => 'term_id');
        public function __construct($post_id)
        {
        }
        public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0)
        {
        }
    }
    /**
     * Category walker for generating dokan store category
     */
    class StoreCategory extends \WeDevs\Dokan\Walkers\Category
    {
        public function __construct($seller_id)
        {
        }
        public function start_el(&$output, $category, $depth = 0, $args = [], $id = 0)
        {
        }
    }
}
namespace WeDevs\Dokan\Widgets {
    class BestSellingProducts extends \WP_Widget
    {
        /**
         * Constructor
         *
         * @return void
         **/
        public function __construct()
        {
        }
        /**
         * Front-end display of widget.
         *
         * @see WP_Widget::widget()
         *
         * @param array $args     Widget arguments.
         * @param array $instance Saved values from database.
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance)
        {
        }
        /**
         * Sanitize widget form values as they are saved.
         *
         * @see WP_Widget::update()
         *
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values from database.
         *
         * @return array Updated safe values to be saved.
         */
        public function update($new_instance, $old_instance)
        {
        }
    }
    class FilterByAttributes extends \WP_Widget
    {
        /**
         * Register widget with WordPress.
         */
        public function __construct()
        {
        }
        /**
         * Front-end display of widget.
         *
         * @since DOKAN_PRO_SINCE
         *
         * @param array $args     Widget arguments.
         * @param array $instance Saved values from database.
         *
         * @see WP_Widget::widget()
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Back-end widget form.
         *
         * @since DOKAN_PRO_SINCE
         *
         * @param array $instance Previously saved values from database.
         *
         * @see WP_Widget::form()
         */
        public function form($instance)
        {
        }
        /**
         * Sanitize widget form values as they are saved.
         *
         * @since DOKAN_PRO_SINCE
         *
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values from database.
         *
         * @see WP_Widget::update()
         *
         * @see WP_Widget::update()
         *
         * @return array Updated safe values to be saved.
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Get this widget taxonomy.
         *
         * @since DOKAN_PRO_SINCE
         *
         * @param array $instance Array of instance options.
         *
         * @return string
         */
        protected function get_instance_taxonomy($instance)
        {
        }
    }
    class Manager
    {
        use \WeDevs\Dokan\Traits\ChainableContainer;
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Check if widget class exists
         *
         * @since 3.0.0
         *
         * @param string $widget_id
         *
         * @return bool
         */
        public function is_exists($widget_id)
        {
        }
        /**
         * Get widget id from widget class
         *
         * @since 3.0.0
         *
         * @param string $widget_class
         *
         * @return bool|string Returns widget id if found, outherwise returns false
         */
        public function get_id($widget_class)
        {
        }
    }
    class ProductCategoryMenu extends \WP_Widget
    {
        /**
         * Constructor
         *
         * @return void
         **/
        public function __construct()
        {
        }
        /**
         * Outputs the HTML for this widget.
         *
         * @param array  An array of standard parameters for widgets in this theme
         * @param array  An array of settings for this widget instance
         * @return void Echoes it's output
         **/
        public function widget($args, $instance)
        {
        }
        /**
         * Deals with the settings when they are saved by the admin. Here is
         * where any validation should be dealt with.
         *
         * @param array  An array of new settings as submitted by the admin
         * @param array  An array of the previous settings
         * @return array The validated and (if necessary) amended settings
         **/
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Displays the form for this widget on the Widgets page of the WP Admin area.
         *
         * @param array  An array of the current settings for this widget
         * @return void Echoes it's output
         **/
        public function form($instance)
        {
        }
    }
    class StoreCategoryMenu extends \WP_Widget
    {
        /**
         * Constructor
         *
         * @return void
         **/
        public function __construct()
        {
        }
        /**
         * Outputs the HTML for this widget.
         *
         * @param array  An array of standard parameters for widgets in this theme
         * @param array  An array of settings for this widget instance
         * @return void Echoes it's output
         **/
        public function widget($args, $instance)
        {
        }
        /**
         * Deals with the settings when they are saved by the admin. Here is
         * where any validation should be dealt with.
         *
         * @param array  An array of new settings as submitted by the admin
         * @param array  An array of the previous settings
         * @return array The validated and (if necessary) amended settings
         **/
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Displays the form for this widget on the Widgets page of the WP Admin area.
         *
         * @param array  An array of the current settings for this widget
         * @return void Echoes it's output
         **/
        public function form($instance)
        {
        }
    }
    /**
     * Dokan Store Contact Seller Widget
     *
     * @since 1.0
     *
     * @package dokan
     */
    class StoreContactForm extends \WP_Widget
    {
        /**
         * Constructor
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Outputs the HTML for this widget.
         *
         * @param array  An array of standard parameters for widgets in this theme
         * @param array  An array of settings for this widget instance
         *
         * @return void Echoes it's output
         **/
        public function widget($args, $instance)
        {
        }
        /**
         * Deals with the settings when they are saved by the admin. Here is
         * where any validation should be dealt with.
         *
         * @param array  An array of new settings as submitted by the admin
         * @param array  An array of the previous settings
         *
         * @return array The validated and (if necessary) amended settings
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Displays the form for this widget on the Widgets page of the WP Admin area.
         *
         * @param array  An array of the current settings for this widget
         *
         * @return void Echoes it's output
         */
        public function form($instance)
        {
        }
    }
    /**
     * Dokan Store Location Widget
     *
     * @since 1.0
     *
     * @package dokan
     */
    class StoreLocation extends \WP_Widget
    {
        /**
         * Constructor
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Outputs the HTML for this widget.
         *
         * @param array  An array of standard parameters for widgets in this theme
         * @param array  An array of settings for this widget instance
         *
         * @return void Echoes it's output
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Deals with the settings when they are saved by the admin. Here is
         * where any validation should be dealt with.
         *
         * @param array  An array of new settings as submitted by the admin
         * @param array  An array of the previous settings
         *
         * @return array The validated and (if necessary) amended settings
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Displays the form for this widget on the Widgets page of the WP Admin area.
         *
         * @param array  An array of the current settings for this widget
         *
         * @return void Echoes it's output
         */
        public function form($instance)
        {
        }
    }
    /**
     * Dokan Store Open Close Widget
     *
     * @since 2.7.3
     *
     * @package dokan
     */
    class StoreOpenClose extends \WP_Widget
    {
        /**
         * Constructor
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Outputs the HTML for this widget.
         *
         * @param array  An array of standard parameters for widgets in this theme
         * @param array  An array of settings for this widget instance
         *
         * @return void Echoes it's output
         **/
        public function widget($args, $instance)
        {
        }
        /**
         * Deals with the settings when they are saved by the admin. Here is
         * where any validation should be dealt with.
         *
         * @param array  An array of new settings as submitted by the admin
         * @param array  An array of the previous settings
         *
         * @return array The validated and (if necessary) amended settings
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Displays the form for this widget on the Widgets page of the WP Admin area.
         *
         * @param array  An array of the current settings for this widget
         *
         * @return void Echoes it's output
         */
        public function form($instance)
        {
        }
    }
    class TopratedProducts extends \WP_Widget
    {
        /**
         * Register widget with WordPress.
         */
        public function __construct()
        {
        }
        /**
         * Front-end display of widget.
         *
         * @see WP_Widget::widget()
         *
         * @param array $args     Widget arguments.
         * @param array $instance Saved values from database.
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance)
        {
        }
        /**
         * Sanitize widget form values as they are saved.
         *
         * @see WP_Widget::update()
         *
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values from database.
         *
         * @return array Updated safe values to be saved.
         */
        public function update($new_instance, $old_instance)
        {
        }
    }
}
namespace WeDevs\Dokan\Withdraw\Export {
    class CSV
    {
        /**
         * Witdraws to export
         *
         * @var array
         */
        protected $withdraws = [];
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @param array $withdraws
         */
        public function __construct($withdraws)
        {
        }
        /**
         * Export withdraws
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function export()
        {
        }
    }
    class Manager
    {
        /**
         * Withdraws to export
         *
         * @var array
         */
        protected $withdraws = [];
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @param array $args
         */
        public function __construct($args)
        {
        }
        /**
         * Export data in CSV
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function csv()
        {
        }
    }
}
namespace WeDevs\Dokan\Withdraw {
    class Hooks
    {
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Download Withdraw Log Export File.
         *
         * @since 3.8.3
         *
         * @return void
         */
        public function download_withdraw_log_export_file()
        {
        }
        /**
         * Dokan Custom Withdraw Method Title
         *
         * @since 3.3.7
         *
         * @param string      $title
         * @param string      $method_key
         * @param Withdraw $request
         *
         * @return string
         */
        public function dokan_withdraw_dokan_custom_method_title($title, $method_key, $request)
        {
        }
        /**
         * Update vendor balance after approve a request.
         *
         * @since 3.0.0
         *
         * @param \WeDevs\Dokan\Withdraw\Withdraw $withdraw
         *
         * @return void
         */
        public function update_vendor_balance($withdraw)
        {
        }
        /**
         * Handle withdraw request ajax.
         *
         * @since 3.3.7
         *
         * @return void
         */
        public function ajax_handle_withdraw_request()
        {
        }
        /**
         * Handle default with method change.
         *
         * @since 3.3.7
         *
         * @return void
         */
        public function ajax_handle_make_default_method()
        {
        }
    }
    class Withdraw
    {
        /**
         * Witthdraw data
         *
         * @var array
         */
        protected $data = [];
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @return void
         */
        public function __construct($data = [])
        {
        }
        /**
         * Get withdraw data
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_withdraw()
        {
        }
        /**
         * Get withdraw id
         *
         * @since 3.0.0
         *
         * @return int
         */
        public function get_id()
        {
        }
        /**
         * Get user_id
         *
         * @since 3.0.0
         *
         * @return int
         */
        public function get_user_id()
        {
        }
        /**
         * Get amount
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_amount()
        {
        }
        /**
         * Get date
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_date()
        {
        }
        /**
         * Get status
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_status()
        {
        }
        /**
         * Get ip
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_method()
        {
        }
        /**
         * Get note
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_note()
        {
        }
        /**
         * Get details
         *
         * @since DOKAN_LITE_SINCE
         *
         * @return string
         */
        public function get_details()
        {
        }
        /**
         * Get ip
         *
         * @since 3.0.0
         *
         * @return string
         */
        public function get_ip()
        {
        }
        /**
         * Get withdraw charge
         *
         * @since 3.9.6
         *
         * @returns int|float
         */
        public function get_charge()
        {
        }
        /**
         * Get withdraw revivable amount after deducting the charge amount.
         *
         * @since 3.9.6
         *
         * @returns int|float
         */
        public function get_receivable_amount()
        {
        }
        /**
         * Get withdraw charge information.
         *
         * @since 3.9.6
         *
         * @returns array
         */
        public function get_charge_data()
        {
        }
        /**
         * Set user_id
         *
         * @since 3.0.0
         *
         * @param int $user_id
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_user_id($user_id)
        {
        }
        /**
         * Set amount
         *
         * @since 3.0.0
         *
         * @param string $amount
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_amount($amount)
        {
        }
        /**
         * Set date
         *
         * @since 3.0.0
         *
         * @param string $date
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_date($date)
        {
        }
        /**
         * Set status
         *
         * @since 3.0.0
         *
         * @param string $status
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_status($status)
        {
        }
        /**
         * Set method
         *
         * @since 3.0.0
         *
         * @param string $method
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_method($method)
        {
        }
        /**
         * Set note
         *
         * @since 3.0.0
         *
         * @param string $note
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_note($note)
        {
        }
        /**
         * Set details
         *
         * @since DOKAN_LITE_SINCE
         *
         * @param string $details
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_details($details)
        {
        }
        /**
         * Set ip
         *
         * @since 3.0.0
         *
         * @param string $ip
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_ip($ip)
        {
        }
        /**
         * Sets charge.
         *
         * @since 3.9.6
         *
         * @param $amount
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_charge($amount)
        {
        }
        /**
         * Set receivable amount
         *
         * @since 3.9.6
         *
         * @param $receivable
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_recivable($receivable)
        {
        }
        /**
         * Sets charge data.
         *
         * @since 3.9.6
         *
         * @param $charge_data array
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function set_charge_data($charge_data)
        {
        }
        /**
         * Calculate withdraw charge
         *
         * @since 3.9.6
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw
         */
        public function calculate_charge()
        {
        }
        /**
         * Returns withdraw data.
         *
         * @since 3.9.6
         *
         * @return array
         */
        public function get_data() : array
        {
        }
        /**
         * Create or update a withdraw
         *
         * @since 3.0.0
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw|\WP_Error
         */
        public function save()
        {
        }
        /**
         * Create or add a withdraw request
         *
         * @since 3.0.0
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw|\WP_Error
         */
        protected function create()
        {
        }
        /**
         * Update a withdraw
         *
         * @since 3.0.0
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw|\WP_Error
         */
        protected function update()
        {
        }
        /**
         * Delete a withdraw
         *
         * @since 3.0.0
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraw|\WP_Error
         */
        public function delete()
        {
        }
    }
    /**
     * Withdraw Cache class.
     *
     * Manage all of the caches for vendor and admin withdrawal functionalities.
     *
     * @since 3.3.2
     *
     * @see \WeDevs\Dokan\Cache
     */
    class WithdrawCache
    {
        public function __construct()
        {
        }
        /**
         * Clear Withdraw Cache Group for Seller.
         *
         * @since 3.3.2
         *
         * @param int $seller_id
         *
         * @return void
         */
        public static function delete($seller_id)
        {
        }
        /**
         * Clear Cache After Seller Withdraw request.
         *
         * @since 3.3.2
         *
         * @param  int    $seller_id
         * @param  float  $amount
         * @param  string $method
         *
         * @return void
         */
        public function withdraw_request_created($seller_id, $amount, $method)
        {
        }
        /**
         * Delete seller balance cache after a withdraw status is update.
         *
         * @since 3.3.2
         *
         * @param string $status
         * @param int    $seller_id
         * @param int    $id
         *
         * @return void
         */
        public function withdraw_status_updated($status, $seller_id, $id)
        {
        }
        /**
         * Handle cache on Approve/Reject withdraw request.
         *
         * @since 3.3.2
         *
         * @param Withdraw $withdraw
         *
         * @return void
         */
        public function invalidate_withdraw_cache($withdraw)
        {
        }
    }
    class Withdraws
    {
        /**
         * Query arguments
         *
         * @var array
         */
        protected $args = [];
        /**
         * Withdraw results
         *
         * @var array
         */
        protected $withdraws = [];
        /**
         * Total withdraw found
         *
         * @var int
         */
        protected $total = 0;
        /**
         * Maximum number of pages
         *
         * @var null|int
         */
        protected $max_num_pages = null;
        /**
         * Status counts.
         *
         * @since 3.8.3
         *
         * @var array $status
         */
        protected $status = [];
        /**
         * Class constructor
         *
         * @since 3.0.0
         *
         * @param array $args
         *
         * @return void
         */
        public function __construct($args = [])
        {
        }
        /**
         * Get withdraws
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_withdraws()
        {
        }
        /**
         * Query withdraws
         *
         * @since 3.0.0
         *
         * @return \WeDevs\Dokan\Withdraw\Withdraws
         */
        public function query()
        {
        }
        /**
         * Get withdraw status count.
         *
         * @since 3.8.3
         *
         * @return array
         */
        public function get_status_count()
        {
        }
        /**
         * Get total number of withdraws
         *
         * @since 3.0.0
         *
         * @return int
         */
        public function get_total()
        {
        }
        /**
         * Get maximum number of pages
         *
         * @since 3.0.0
         *
         * @return int
         */
        public function get_maximum_num_pages()
        {
        }
    }
}
namespace {
    class DokanCategoryWalker extends \WeDevs\Dokan\Walkers\CategoryDropdownSingle
    {
        /**
         * Constructor method
         *
         * @param int $post_id
         */
        public function __construct($post_id)
        {
        }
    }
    class WeDevs_Promotion extends \WeDevs\Dokan\Admin\Promotion
    {
    }
    /**
     * Dokan Uninstall
     *
     * Uninstalling Dokan deletes user roles, tables, pages, meta data and options.
     *
     * @since   3.2.15
     *
     * @package Dokan\Uninstaller
     */
    class Dokan_Uninstaller
    {
        /**
         * Constructor for the class Dokan_Uninstaller
         *
         * @since 3.2.15
         */
        public function __construct()
        {
        }
        /**
         * Return a list of Dokan capabilities
         *
         * @since 3.2.15
         *
         * @return string[]
         */
        private function get_dokan_capabilities()
        {
        }
        /**
         * Remove Dokan roles.
         *
         * @since 3.2.15
         *
         * @return void
         */
        private function remove_roles()
        {
        }
        /**
         * Return a list of tables. Used to make sure all Dokan tables are dropped
         * when uninstalling the plugin
         *
         * @since 3.2.15
         *
         * @return array Dokan tables.
         */
        private function get_tables()
        {
        }
        /**
         * Drop all tables created by Dokan Lite and Pro
         *
         * @since 3.2.15
         *
         * @return void
         */
        private function drop_tables()
        {
        }
        /**
         * Change Dokan Vendor to WooCommerce Customer
         *
         * @since 3.2.15
         *
         * @return void
         */
        private function change_vendor_role_to_customer()
        {
        }
        /**
         * Delete Dokan and Dokan Pro related user metas
         *
         * @since 3.7.12
         *
         * @return void
         */
        private function delete_usermeta()
        {
        }
    }
}
namespace Appsero {
    /**
     * Appsero Client
     *
     * This class is necessary to set project data
     */
    class Client
    {
        /**
         * The client version
         *
         * @var string
         */
        public $version = '2.0.2';
        /**
         * Hash identifier of the plugin
         *
         * @var string
         */
        public $hash;
        /**
         * Name of the plugin
         *
         * @var string
         */
        public $name;
        /**
         * The plugin/theme file path
         *
         * @example .../wp-content/plugins/test-slug/test-slug.php
         *
         * @var string
         */
        public $file;
        /**
         * Main plugin file
         *
         * @example test-slug/test-slug.php
         *
         * @var string
         */
        public $basename;
        /**
         * Slug of the plugin
         *
         * @example test-slug
         *
         * @var string
         */
        public $slug;
        /**
         * The project version
         *
         * @var string
         */
        public $project_version;
        /**
         * The project type
         *
         * @var string
         */
        public $type;
        /**
         * Textdomain
         *
         * @var string
         */
        public $textdomain;
        /**
         * The Object of Insights Class
         *
         * @var object
         */
        private $insights;
        /**
         * The Object of License Class
         *
         * @var object
         */
        private $license;
        /**
         * Initialize the class
         *
         * @param string $hash hash of the plugin
         * @param string $name readable name of the plugin
         * @param string $file main plugin file path
         */
        public function __construct($hash, $name, $file)
        {
        }
        /**
         * Initialize insights class
         *
         * @return Appsero\Insights
         */
        public function insights()
        {
        }
        /**
         * Initialize plugin/theme updater
         *
         * @return void
         */
        public function updater()
        {
        }
        /**
         * Initialize license checker
         *
         * @return Appsero\License
         */
        public function license()
        {
        }
        /**
         * API Endpoint
         *
         * @return string
         */
        public function endpoint()
        {
        }
        /**
         * Set project basename, slug and version
         *
         * @return void
         */
        protected function set_basename_and_slug()
        {
        }
        /**
         * Send request to remote endpoint
         *
         * @param array  $params
         * @param string $route
         *
         * @return array|WP_Error array of results including HTTP headers or WP_Error if the request failed
         */
        public function send_request($params, $route, $blocking = false)
        {
        }
        /**
         * Check if the current server is localhost
         *
         * @return bool
         */
        public function is_local_server()
        {
        }
        /**
         * Translate function _e()
         */
        // phpcs:ignore
        public function _etrans($text)
        {
        }
        /**
         * Translate function __()
         */
        // phpcs:ignore
        public function __trans($text)
        {
        }
        /**
         * Set project textdomain
         */
        public function set_textdomain($textdomain)
        {
        }
    }
    /**
     * Appsero Insights
     *
     * This is a tracker class to track plugin usage based on if the customer has opted in.
     * No personal information is being tracked by this class, only general settings, active plugins, environment details
     * and admin email.
     */
    class Insights
    {
        /**
         * The notice text
         *
         * @var string
         */
        public $notice;
        /**
         * Wheather to the notice or not
         *
         * @var bool
         */
        protected $show_notice = true;
        /**
         * If extra data needs to be sent
         *
         * @var array
         */
        protected $extra_data = [];
        /**
         * AppSero\Client
         *
         * @var object
         */
        protected $client;
        /**
         * @var bool
         */
        private $plugin_data = false;
        /**
         * Initialize the class
         *
         * @param null $name
         * @param null $file
         */
        public function __construct($client, $name = null, $file = null)
        {
        }
        /**
         * Don't show the notice
         *
         * @return \self
         */
        public function hide_notice()
        {
        }
        /**
         * Add plugin data if needed
         *
         * @return \self
         */
        public function add_plugin_data()
        {
        }
        /**
         * Add extra data if needed
         *
         * @param array $data
         *
         * @return \self
         */
        public function add_extra($data = [])
        {
        }
        /**
         * Set custom notice text
         *
         * @param string $text
         *
         * @return \self
         */
        public function notice($text = '')
        {
        }
        /**
         * Initialize insights
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Initialize theme hooks
         *
         * @return void
         */
        public function init_theme()
        {
        }
        /**
         * Initialize plugin hooks
         *
         * @return void
         */
        public function init_plugin()
        {
        }
        /**
         * Initialize common hooks
         *
         * @return void
         */
        protected function init_common()
        {
        }
        /**
         * Send tracking data to AppSero server
         *
         * @param bool $override
         *
         * @return void
         */
        public function send_tracking_data($override = false)
        {
        }
        /**
         * Get the tracking data points
         *
         * @return array
         */
        protected function get_tracking_data()
        {
        }
        /**
         * If a child class wants to send extra data
         *
         * @return mixed
         */
        protected function get_extra_data()
        {
        }
        /**
         * Explain the user which data we collect
         *
         * @return array
         */
        protected function data_we_collect()
        {
        }
        /**
         * Check if the user has opted into tracking
         *
         * @return bool
         */
        public function tracking_allowed()
        {
        }
        /**
         * Get the last time a tracking was sent
         *
         * @return false|string
         */
        private function get_last_send()
        {
        }
        /**
         * Check if the notice has been dismissed or enabled
         *
         * @return bool
         */
        public function notice_dismissed()
        {
        }
        /**
         * Check if the current server is localhost
         *
         * @return bool
         */
        private function is_local_server()
        {
        }
        /**
         * Schedule the event weekly
         *
         * @return void
         */
        private function schedule_event()
        {
        }
        /**
         * Clear any scheduled hook
         *
         * @return void
         */
        private function clear_schedule_event()
        {
        }
        /**
         * Display the admin notice to users that have not opted-in or out
         *
         * @return void
         */
        public function admin_notice()
        {
        }
        /**
         * Handle the optin/optout
         *
         * @return void
         */
        public function handle_optin_optout()
        {
        }
        /**
         * Tracking optin
         *
         * @return void
         */
        public function optin()
        {
        }
        /**
         * Optout from tracking
         *
         * @return void
         */
        public function optout()
        {
        }
        /**
         * Get the number of post counts
         *
         * @param string $post_type
         *
         * @return int
         */
        public function get_post_count($post_type)
        {
        }
        /**
         * Get server related info.
         *
         * @return array
         */
        private static function get_server_info()
        {
        }
        /**
         * Get WordPress related data.
         *
         * @return array
         */
        private function get_wp_info()
        {
        }
        /**
         * Get the list of active and inactive plugins
         *
         * @return array
         */
        private function get_all_plugins()
        {
        }
        /**
         * Get user totals based on user role.
         *
         * @return array
         */
        public function get_user_counts()
        {
        }
        /**
         * Add weekly cron schedule
         *
         * @param array $schedules
         *
         * @return array
         */
        public function add_weekly_schedule($schedules)
        {
        }
        /**
         * Plugin activation hook
         *
         * @return void
         */
        public function activate_plugin()
        {
        }
        /**
         * Clear our options upon deactivation
         *
         * @return void
         */
        public function deactivation_cleanup()
        {
        }
        /**
         * Hook into action links and modify the deactivate link
         *
         * @param array $links
         *
         * @return array
         */
        public function plugin_action_links($links)
        {
        }
        /**
         * Plugin uninstall reasons
         *
         * @return array
         */
        private function get_uninstall_reasons()
        {
        }
        /**
         * Plugin deactivation uninstall reason submission
         *
         * @return void
         */
        public function uninstall_reason_submission()
        {
        }
        /**
         * Handle the plugin deactivation feedback
         *
         * @return void
         */
        public function deactivate_scripts()
        {
        }
        /**
         * Run after theme deactivated
         *
         * @param string $new_name
         * @param object $new_theme
         * @param object $old_theme
         *
         * @return void
         */
        public function theme_deactivated($new_name, $new_theme, $old_theme)
        {
        }
        /**
         * Get user IP Address
         */
        private function get_user_ip_address()
        {
        }
        /**
         * Get site name
         */
        private function get_site_name()
        {
        }
        /**
         * Send request to appsero if user skip to send tracking data
         */
        private function send_tracking_skipped_request()
        {
        }
        /**
         * Deactivation modal styles
         */
        private function deactivation_modal_styles()
        {
        }
    }
    /**
     * Appsero License Checker
     *
     * This class will check, active and deactive license
     */
    class License
    {
        /**
         * AppSero\Client
         *
         * @var object
         */
        protected $client;
        /**
         * Arguments of create menu
         *
         * @var array
         */
        protected $menu_args;
        /**
         * `option_name` of `wp_options` table
         *
         * @var string
         */
        protected $option_key;
        /**
         * Error message of HTTP request
         *
         * @var string
         */
        public $error;
        /**
         * Success message on form submit
         *
         * @var string
         */
        public $success;
        /**
         * Corn schedule hook name
         *
         * @var string
         */
        protected $schedule_hook;
        /**
         * Set value for valid license
         *
         * @var bool
         */
        private $is_valid_license = null;
        /**
         * Initialize the class
         *
         * @param Client $client
         */
        public function __construct(\Appsero\Client $client)
        {
        }
        /**
         * Set the license option key.
         *
         * If someone wants to override the default generated key.
         *
         * @param string $key
         *
         * @since 1.3.0
         *
         * @return License
         */
        public function set_option_key($key)
        {
        }
        /**
         * Get the license key
         *
         * @since 1.3.0
         *
         * @return string|null
         */
        public function get_license()
        {
        }
        /**
         * Check license
         *
         * @return array
         */
        public function check($license_key)
        {
        }
        /**
         * Active a license
         *
         * @return array
         */
        public function activate($license_key)
        {
        }
        /**
         * Deactivate a license
         *
         * @return array
         */
        public function deactivate($license_key)
        {
        }
        /**
         * Send common request
         *
         * @return array
         */
        protected function send_request($license_key, $route)
        {
        }
        /**
         * License Refresh Endpoint
         */
        public function refresh_license_api()
        {
        }
        /**
         * Add settings page for license
         *
         * @param array $args
         *
         * @return void
         */
        public function add_settings_page($args = [])
        {
        }
        /**
         * Admin Menu hook
         *
         * @return void
         */
        public function admin_menu()
        {
        }
        /**
         * License menu output
         */
        public function menu_output()
        {
        }
        /**
         * License form submit
         */
        public function license_form_submit($form_data = array())
        {
        }
        /**
         * Check license status on schedule
         */
        public function check_license_status()
        {
        }
        /**
         * Check this is a valid license
         */
        public function is_valid()
        {
        }
        /**
         * Check this is a valid license
         */
        public function is_valid_by($option, $value)
        {
        }
        /**
         * Styles for licenses page
         */
        private function licenses_style()
        {
        }
        /**
         * Show active license information
         */
        private function show_active_license_info($license)
        {
        }
        /**
         * Show license settings page notices
         */
        private function show_license_page_notices()
        {
        }
        /**
         * Card header
         */
        private function show_license_page_card_header($license)
        {
        }
        /**
         * Active client license
         */
        private function active_client_license($license_key)
        {
        }
        /**
         * Deactive client license
         */
        private function deactive_client_license()
        {
        }
        /**
         * Refresh Client License
         */
        private function refresh_client_license()
        {
        }
        /**
         * Add license menu page
         */
        private function create_menu_page()
        {
        }
        /**
         * Add submenu page
         */
        private function create_submenu_page()
        {
        }
        /**
         * Add submenu page
         */
        private function create_options_page()
        {
        }
        /**
         * Schedule daily sicense checker event
         */
        public function schedule_cron_event()
        {
        }
        /**
         * Clear any scheduled hook
         */
        public function clear_scheduler()
        {
        }
        /**
         * Enable/Disable schedule
         */
        private function run_schedule()
        {
        }
        /**
         * Get input license key
         *
         * @return $license
         */
        private function get_input_license_value($action, $license)
        {
        }
    }
    /**
     * Appsero Updater
     *
     * This class will show new updates project
     */
    class Updater
    {
        /**
         * Appsero\Client
         *
         * @var object
         */
        protected $client;
        /**
         * Object of Updater
         *
         * @var object
         */
        protected static $instance;
        /**
         * Cache key
         *
         * @var string
         */
        protected $cache_key;
        /**
         * Initialize the class
         *
         * @param $client
         */
        public function __construct($client)
        {
        }
        public static function init($client)
        {
        }
        /**
         * Set up WordPress filter to hooks to get update.
         *
         * @return void
         */
        public function run_plugin_hooks()
        {
        }
        /**
         * Set up WordPress filter to hooks to get update.
         *
         * @return void
         */
        public function run_theme_hooks()
        {
        }
        /**
         * Check for Update for this specific project
         */
        public function check_plugin_update($transient_data)
        {
        }
        /**
         * Get version info from database
         *
         * @return object or Boolean
         */
        private function get_cached_version_info()
        {
        }
        /**
         * Set version info to database
         */
        private function set_cached_version_info($value)
        {
        }
        /**
         * Get plugin info from Appsero
         */
        private function get_project_latest_version()
        {
        }
        /**
         * Updates information on the "View version x.x details" page with custom data.
         *
         * @param mixed  $data
         * @param string $action
         * @param object $args
         *
         * @return object $data
         */
        public function plugins_api_filter($data, $action = '', $args = null)
        {
        }
        /**
         * Check theme upate
         */
        public function check_theme_update($transient_data)
        {
        }
        /**
         * Get version information
         */
        private function get_version_info()
        {
        }
    }
}
namespace {
    // autoload_real.php @generated by Composer
    class ComposerAutoloaderInit1e669f7f5259d0a69bc52936935bb40c
    {
        private static $loader;
        public static function loadClassLoader($class)
        {
        }
        /**
         * @return \Composer\Autoload\ClassLoader
         */
        public static function getLoader()
        {
        }
    }
}
namespace Composer\Autoload {
    class ComposerStaticInit1e669f7f5259d0a69bc52936935bb40c
    {
        public static $files = array('b45b351e6b6f7487d819961fef2fda77' => __DIR__ . '/..' . '/jakeasmith/http_build_url/src/http_build_url.php', '0ea370e600bbac1ed14210d26fb957e5' => __DIR__ . '/../..' . '/includes/functions-rest-api.php', '5002a4b4787d157353289afe21b0d460' => __DIR__ . '/../..' . '/includes/functions-dashboard-navigation.php');
        public static $prefixLengthsPsr4 = array('W' => array('WeDevs\\Dokan\\' => 13), 'A' => array('Appsero\\' => 8));
        public static $prefixDirsPsr4 = array('WeDevs\\Dokan\\' => array(0 => __DIR__ . '/../..' . '/includes'), 'Appsero\\' => array(0 => __DIR__ . '/..' . '/appsero/client/src', 1 => __DIR__ . '/..' . '/appsero/updater/src'));
        public static $classMap = array('Appsero\\Client' => __DIR__ . '/..' . '/appsero/client/src/Client.php', 'Appsero\\Insights' => __DIR__ . '/..' . '/appsero/client/src/Insights.php', 'Appsero\\License' => __DIR__ . '/..' . '/appsero/client/src/License.php', 'Appsero\\Updater' => __DIR__ . '/..' . '/appsero/updater/src/Updater.php', 'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php', 'WeDevs\\Dokan\\Abstracts\\DokanBackgroundProcesses' => __DIR__ . '/../..' . '/includes/Abstracts/DokanBackgroundProcesses.php', 'WeDevs\\Dokan\\Abstracts\\DokanCache' => __DIR__ . '/../..' . '/includes/Abstracts/DokanCache.php', 'WeDevs\\Dokan\\Abstracts\\DokanModel' => __DIR__ . '/../..' . '/includes/Abstracts/DokanModel.php', 'WeDevs\\Dokan\\Abstracts\\DokanPromotion' => __DIR__ . '/../..' . '/includes/Abstracts/DokanPromotion.php', 'WeDevs\\Dokan\\Abstracts\\DokanRESTAdminController' => __DIR__ . '/../..' . '/includes/Abstracts/DokanRESTAdminController.php', 'WeDevs\\Dokan\\Abstracts\\DokanRESTController' => __DIR__ . '/../..' . '/includes/Abstracts/DokanRESTController.php', 'WeDevs\\Dokan\\Abstracts\\DokanShortcode' => __DIR__ . '/../..' . '/includes/Abstracts/DokanShortcode.php', 'WeDevs\\Dokan\\Abstracts\\DokanUpgrader' => __DIR__ . '/../..' . '/includes/Abstracts/DokanUpgrader.php', 'WeDevs\\Dokan\\Abstracts\\ProductStatusChanger' => __DIR__ . '/../..' . '/includes/Abstracts/ProductStatusChanger.php', 'WeDevs\\Dokan\\Admin\\AdminBar' => __DIR__ . '/../..' . '/includes/Admin/AdminBar.php', 'WeDevs\\Dokan\\Admin\\Hooks' => __DIR__ . '/../..' . '/includes/Admin/Hooks.php', 'WeDevs\\Dokan\\Admin\\Menu' => __DIR__ . '/../..' . '/includes/Admin/Menu.php', 'WeDevs\\Dokan\\Admin\\Notices\\Helper' => __DIR__ . '/../..' . '/includes/Admin/Notices/Helper.php', 'WeDevs\\Dokan\\Admin\\Notices\\LimitedTimePromotion' => __DIR__ . '/../..' . '/includes/Admin/Notices/LimitedTimePromotion.php', 'WeDevs\\Dokan\\Admin\\Notices\\Manager' => __DIR__ . '/../..' . '/includes/Admin/Notices/Manager.php', 'WeDevs\\Dokan\\Admin\\Notices\\PluginReview' => __DIR__ . '/../..' . '/includes/Admin/Notices/PluginReview.php', 'WeDevs\\Dokan\\Admin\\Notices\\SetupWizard' => __DIR__ . '/../..' . '/includes/Admin/Notices/SetupWizard.php', 'WeDevs\\Dokan\\Admin\\Notices\\WhatsNew' => __DIR__ . '/../..' . '/includes/Admin/Notices/WhatsNew.php', 'WeDevs\\Dokan\\Admin\\Pointers' => __DIR__ . '/../..' . '/includes/Admin/Pointers.php', 'WeDevs\\Dokan\\Admin\\Promotion' => __DIR__ . '/../..' . '/includes/Admin/Promotion.php', 'WeDevs\\Dokan\\Admin\\Settings' => __DIR__ . '/../..' . '/includes/Admin/Settings.php', 'WeDevs\\Dokan\\Admin\\SetupWizard' => __DIR__ . '/../..' . '/includes/Admin/SetupWizard.php', 'WeDevs\\Dokan\\Admin\\SetupWizardNoWC' => __DIR__ . '/../..' . '/includes/Admin/SetupWizardNoWC.php', 'WeDevs\\Dokan\\Admin\\SetupWizardWCAdmin' => __DIR__ . '/../..' . '/includes/Admin/SetupWizardWCAdmin.php', 'WeDevs\\Dokan\\Admin\\UserProfile' => __DIR__ . '/../..' . '/includes/Admin/UserProfile.php', 'WeDevs\\Dokan\\Admin\\WithdrawLogExporter' => __DIR__ . '/../..' . '/includes/Admin/WithdrawLogExporter.php', 'WeDevs\\Dokan\\Ajax' => __DIR__ . '/../..' . '/includes/Ajax.php', 'WeDevs\\Dokan\\Assets' => __DIR__ . '/../..' . '/includes/Assets.php', 'WeDevs\\Dokan\\BackgroundProcess\\Manager' => __DIR__ . '/../..' . '/includes/BackgroundProcess/Manager.php', 'WeDevs\\Dokan\\BackgroundProcess\\RewriteVariableProductsAuthor' => __DIR__ . '/../..' . '/includes/BackgroundProcess/RewriteVariableProductsAuthor.php', 'WeDevs\\Dokan\\Blocks\\ProductBlock' => __DIR__ . '/../..' . '/includes/Blocks/ProductBlock.php', 'WeDevs\\Dokan\\Cache' => __DIR__ . '/../..' . '/includes/Cache.php', 'WeDevs\\Dokan\\CacheInvalidate' => __DIR__ . '/../..' . '/includes/CacheInvalidate.php', 'WeDevs\\Dokan\\CatalogMode\\Admin\\Settings' => __DIR__ . '/../..' . '/includes/CatalogMode/Admin/Settings.php', 'WeDevs\\Dokan\\CatalogMode\\Controller' => __DIR__ . '/../..' . '/includes/CatalogMode/Controller.php', 'WeDevs\\Dokan\\CatalogMode\\Dashboard\\ProductBulkEdit' => __DIR__ . '/../..' . '/includes/CatalogMode/Dashboard/ProductBulkEdit.php', 'WeDevs\\Dokan\\CatalogMode\\Dashboard\\Products' => __DIR__ . '/../..' . '/includes/CatalogMode/Dashboard/Products.php', 'WeDevs\\Dokan\\CatalogMode\\Dashboard\\Settings' => __DIR__ . '/../..' . '/includes/CatalogMode/Dashboard/Settings.php', 'WeDevs\\Dokan\\CatalogMode\\Helper' => __DIR__ . '/../..' . '/includes/CatalogMode/Helper.php', 'WeDevs\\Dokan\\CatalogMode\\Hooks' => __DIR__ . '/../..' . '/includes/CatalogMode/Hooks.php', 'WeDevs\\Dokan\\Commission' => __DIR__ . '/../..' . '/includes/Commission.php', 'WeDevs\\Dokan\\Core' => __DIR__ . '/../..' . '/includes/Core.php', 'WeDevs\\Dokan\\Customizer' => __DIR__ . '/../..' . '/includes/Customizer.php', 'WeDevs\\Dokan\\Customizer\\HeadingControl' => __DIR__ . '/../..' . '/includes/Customizer/HeadingControl.php', 'WeDevs\\Dokan\\Customizer\\RadioImageControl' => __DIR__ . '/../..' . '/includes/Customizer/RadioImageControl.php', 'WeDevs\\Dokan\\Dashboard\\Manager' => __DIR__ . '/../..' . '/includes/Dashboard/Manager.php', 'WeDevs\\Dokan\\Dashboard\\Templates\\Dashboard' => __DIR__ . '/../..' . '/includes/Dashboard/Templates/Dashboard.php', 'WeDevs\\Dokan\\Dashboard\\Templates\\Main' => __DIR__ . '/../..' . '/includes/Dashboard/Templates/Main.php', 'WeDevs\\Dokan\\Dashboard\\Templates\\Manager' => __DIR__ . '/../..' . '/includes/Dashboard/Templates/Manager.php', 'WeDevs\\Dokan\\Dashboard\\Templates\\MultiStepCategories' => __DIR__ . '/../..' . '/includes/Dashboard/Templates/MultiStepCategories.php', 'WeDevs\\Dokan\\Dashboard\\Templates\\Orders' => __DIR__ . '/../..' . '/includes/Dashboard/Templates/Orders.php', 'WeDevs\\Dokan\\Dashboard\\Templates\\Products' => __DIR__ . '/../..' . '/includes/Dashboard/Templates/Products.php', 'WeDevs\\Dokan\\Dashboard\\Templates\\ReverseWithdrawal' => __DIR__ . '/../..' . '/includes/Dashboard/Templates/ReverseWithdrawal.php', 'WeDevs\\Dokan\\Dashboard\\Templates\\Settings' => __DIR__ . '/../..' . '/includes/Dashboard/Templates/Settings.php', 'WeDevs\\Dokan\\Dashboard\\Templates\\Withdraw' => __DIR__ . '/../..' . '/includes/Dashboard/Templates/Withdraw.php', 'WeDevs\\Dokan\\DummyData\\Importer' => __DIR__ . '/../..' . '/includes/DummyData/Importer.php', 'WeDevs\\Dokan\\Emails\\ContactSeller' => __DIR__ . '/../..' . '/includes/Emails/ContactSeller.php', 'WeDevs\\Dokan\\Emails\\Manager' => __DIR__ . '/../..' . '/includes/Emails/Manager.php', 'WeDevs\\Dokan\\Emails\\NewProduct' => __DIR__ . '/../..' . '/includes/Emails/NewProduct.php', 'WeDevs\\Dokan\\Emails\\NewProductPending' => __DIR__ . '/../..' . '/includes/Emails/NewProductPending.php', 'WeDevs\\Dokan\\Emails\\NewSeller' => __DIR__ . '/../..' . '/includes/Emails/NewSeller.php', 'WeDevs\\Dokan\\Emails\\ProductPublished' => __DIR__ . '/../..' . '/includes/Emails/ProductPublished.php', 'WeDevs\\Dokan\\Emails\\ReverseWithdrawalInvoice' => __DIR__ . '/../..' . '/includes/Emails/ReverseWithdrawalInvoice.php', 'WeDevs\\Dokan\\Emails\\VendorCompletedOrder' => __DIR__ . '/../..' . '/includes/Emails/VendorCompletedOrder.php', 'WeDevs\\Dokan\\Emails\\VendorNewOrder' => __DIR__ . '/../..' . '/includes/Emails/VendorNewOrder.php', 'WeDevs\\Dokan\\Emails\\VendorProductReview' => __DIR__ . '/../..' . '/includes/Emails/VendorProductReview.php', 'WeDevs\\Dokan\\Emails\\VendorWithdrawRequest' => __DIR__ . '/../..' . '/includes/Emails/VendorWithdrawRequest.php', 'WeDevs\\Dokan\\Emails\\WithdrawApproved' => __DIR__ . '/../..' . '/includes/Emails/WithdrawApproved.php', 'WeDevs\\Dokan\\Emails\\WithdrawCancelled' => __DIR__ . '/../..' . '/includes/Emails/WithdrawCancelled.php', 'WeDevs\\Dokan\\Exceptions\\DokanException' => __DIR__ . '/../..' . '/includes/Exceptions/DokanException.php', 'WeDevs\\Dokan\\FakeMailer' => __DIR__ . '/../..' . '/includes/FakeMailer.php', 'WeDevs\\Dokan\\Frontend\\Frontend' => __DIR__ . '/../..' . '/includes/Frontend/Frontend.php', 'WeDevs\\Dokan\\Frontend\\MyAccount\\BecomeAVendor' => __DIR__ . '/../..' . '/includes/Frontend/MyAccount/BecomeAVendor.php', 'WeDevs\\Dokan\\Install\\Installer' => __DIR__ . '/../..' . '/includes/Install/Installer.php', 'WeDevs\\Dokan\\Order\\Admin\\Hooks' => __DIR__ . '/../..' . '/includes/Order/Admin/Hooks.php', 'WeDevs\\Dokan\\Order\\Admin\\Permissions' => __DIR__ . '/../..' . '/includes/Order/Admin/Permissions.php', 'WeDevs\\Dokan\\Order\\Ajax' => __DIR__ . '/../..' . '/includes/Order/Ajax.php', 'WeDevs\\Dokan\\Order\\Controller' => __DIR__ . '/../..' . '/includes/Order/Controller.php', 'WeDevs\\Dokan\\Order\\EmailHooks' => __DIR__ . '/../..' . '/includes/Order/EmailHooks.php', 'WeDevs\\Dokan\\Order\\Frontend\\Hooks' => __DIR__ . '/../..' . '/includes/Order/Frontend/Hooks.php', 'WeDevs\\Dokan\\Order\\Hooks' => __DIR__ . '/../..' . '/includes/Order/Hooks.php', 'WeDevs\\Dokan\\Order\\Manager' => __DIR__ . '/../..' . '/includes/Order/Manager.php', 'WeDevs\\Dokan\\Order\\MiscHooks' => __DIR__ . '/../..' . '/includes/Order/MiscHooks.php', 'WeDevs\\Dokan\\Order\\OrderCache' => __DIR__ . '/../..' . '/includes/Order/OrderCache.php', 'WeDevs\\Dokan\\PageViews' => __DIR__ . '/../..' . '/includes/PageViews.php', 'WeDevs\\Dokan\\Privacy' => __DIR__ . '/../..' . '/includes/Privacy.php', 'WeDevs\\Dokan\\ProductCategory\\Categories' => __DIR__ . '/../..' . '/includes/ProductCategory/Categories.php', 'WeDevs\\Dokan\\ProductCategory\\Helper' => __DIR__ . '/../..' . '/includes/ProductCategory/Helper.php', 'WeDevs\\Dokan\\ProductCategory\\Hooks' => __DIR__ . '/../..' . '/includes/ProductCategory/Hooks.php', 'WeDevs\\Dokan\\ProductCategory\\ProductCategoryCache' => __DIR__ . '/../..' . '/includes/ProductCategory/ProductCategoryCache.php', 'WeDevs\\Dokan\\ProductSections\\AbstractProductSection' => __DIR__ . '/../..' . '/includes/ProductSections/AbstractProductSection.php', 'WeDevs\\Dokan\\ProductSections\\BestSelling' => __DIR__ . '/../..' . '/includes/ProductSections/BestSelling.php', 'WeDevs\\Dokan\\ProductSections\\Featured' => __DIR__ . '/../..' . '/includes/ProductSections/Featured.php', 'WeDevs\\Dokan\\ProductSections\\Latest' => __DIR__ . '/../..' . '/includes/ProductSections/Latest.php', 'WeDevs\\Dokan\\ProductSections\\Manager' => __DIR__ . '/../..' . '/includes/ProductSections/Manager.php', 'WeDevs\\Dokan\\ProductSections\\TopRated' => __DIR__ . '/../..' . '/includes/ProductSections/TopRated.php', 'WeDevs\\Dokan\\Product\\Hooks' => __DIR__ . '/../..' . '/includes/Product/Hooks.php', 'WeDevs\\Dokan\\Product\\Manager' => __DIR__ . '/../..' . '/includes/Product/Manager.php', 'WeDevs\\Dokan\\Product\\ProductAttribute' => __DIR__ . '/../..' . '/includes/Product/ProductAttribute.php', 'WeDevs\\Dokan\\Product\\ProductCache' => __DIR__ . '/../..' . '/includes/Product/ProductCache.php', 'WeDevs\\Dokan\\Product\\VendorStoreInfo' => __DIR__ . '/../..' . '/includes/Product/VendorStoreInfo.php', 'WeDevs\\Dokan\\REST\\AdminDashboardController' => __DIR__ . '/../..' . '/includes/REST/AdminDashboardController.php', 'WeDevs\\Dokan\\REST\\AdminMiscController' => __DIR__ . '/../..' . '/includes/REST/AdminMiscController.php', 'WeDevs\\Dokan\\REST\\AdminNoticeController' => __DIR__ . '/../..' . '/includes/REST/AdminNoticeController.php', 'WeDevs\\Dokan\\REST\\AdminReportController' => __DIR__ . '/../..' . '/includes/REST/AdminReportController.php', 'WeDevs\\Dokan\\REST\\ChangeLogController' => __DIR__ . '/../..' . '/includes/REST/ChangeLogController.php', 'WeDevs\\Dokan\\REST\\DummyDataController' => __DIR__ . '/../..' . '/includes/REST/DummyDataController.php', 'WeDevs\\Dokan\\REST\\Manager' => __DIR__ . '/../..' . '/includes/REST/Manager.php', 'WeDevs\\Dokan\\REST\\OrderController' => __DIR__ . '/../..' . '/includes/REST/OrderController.php', 'WeDevs\\Dokan\\REST\\OrderControllerV2' => __DIR__ . '/../..' . '/includes/REST/OrderControllerV2.php', 'WeDevs\\Dokan\\REST\\ProductAttributeController' => __DIR__ . '/../..' . '/includes/REST/ProductAttributeController.php', 'WeDevs\\Dokan\\REST\\ProductAttributeTermsController' => __DIR__ . '/../..' . '/includes/REST/ProductAttributeTermsController.php', 'WeDevs\\Dokan\\REST\\ProductBlockController' => __DIR__ . '/../..' . '/includes/REST/ProductBlockController.php', 'WeDevs\\Dokan\\REST\\ProductController' => __DIR__ . '/../..' . '/includes/REST/ProductController.php', 'WeDevs\\Dokan\\REST\\ProductControllerV2' => __DIR__ . '/../..' . '/includes/REST/ProductControllerV2.php', 'WeDevs\\Dokan\\REST\\ReverseWithdrawalController' => __DIR__ . '/../..' . '/includes/REST/ReverseWithdrawalController.php', 'WeDevs\\Dokan\\REST\\StoreController' => __DIR__ . '/../..' . '/includes/REST/StoreController.php', 'WeDevs\\Dokan\\REST\\StoreSettingController' => __DIR__ . '/../..' . '/includes/REST/StoreSettingController.php', 'WeDevs\\Dokan\\REST\\StoreSettingControllerV2' => __DIR__ . '/../..' . '/includes/REST/StoreSettingControllerV2.php', 'WeDevs\\Dokan\\REST\\VendorDashboardController' => __DIR__ . '/../..' . '/includes/REST/VendorDashboardController.php', 'WeDevs\\Dokan\\REST\\WithdrawController' => __DIR__ . '/../..' . '/includes/REST/WithdrawController.php', 'WeDevs\\Dokan\\REST\\WithdrawControllerV2' => __DIR__ . '/../..' . '/includes/REST/WithdrawControllerV2.php', 'WeDevs\\Dokan\\Registration' => __DIR__ . '/../..' . '/includes/Registration.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\Admin\\Hooks' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/Admin/Hooks.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\Admin\\Settings' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/Admin/Settings.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\Ajax' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/Ajax.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\BackgroundProcess\\AsyncRequests' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/BackgroundProcess/AsyncRequests.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\BackgroundProcess\\CronActions' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/BackgroundProcess/CronActions.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\Cache' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/Cache.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\Cart' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/Cart.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\FailedActions' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/FailedActions.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\Helper' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/Helper.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\Hooks' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/Hooks.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\InstallerHelper' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/InstallerHelper.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\Manager' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/Manager.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\Order' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/Order.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\ReverseWithdrawal' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/ReverseWithdrawal.php', 'WeDevs\\Dokan\\ReverseWithdrawal\\SettingsHelper' => __DIR__ . '/../..' . '/includes/ReverseWithdrawal/SettingsHelper.php', 'WeDevs\\Dokan\\Rewrites' => __DIR__ . '/../..' . '/includes/Rewrites.php', 'WeDevs\\Dokan\\Shipping\\Hooks' => __DIR__ . '/../..' . '/includes/Shipping/Hooks.php', 'WeDevs\\Dokan\\Shortcodes\\BestSellingProduct' => __DIR__ . '/../..' . '/includes/Shortcodes/BestSellingProduct.php', 'WeDevs\\Dokan\\Shortcodes\\Dashboard' => __DIR__ . '/../..' . '/includes/Shortcodes/Dashboard.php', 'WeDevs\\Dokan\\Shortcodes\\MyOrders' => __DIR__ . '/../..' . '/includes/Shortcodes/MyOrders.php', 'WeDevs\\Dokan\\Shortcodes\\Shortcodes' => __DIR__ . '/../..' . '/includes/Shortcodes/Shortcodes.php', 'WeDevs\\Dokan\\Shortcodes\\Stores' => __DIR__ . '/../..' . '/includes/Shortcodes/Stores.php', 'WeDevs\\Dokan\\Shortcodes\\TopRatedProduct' => __DIR__ . '/../..' . '/includes/Shortcodes/TopRatedProduct.php', 'WeDevs\\Dokan\\Shortcodes\\VendorRegistration' => __DIR__ . '/../..' . '/includes/Shortcodes/VendorRegistration.php', 'WeDevs\\Dokan\\ThemeSupport\\Astra' => __DIR__ . '/../..' . '/includes/ThemeSupport/Astra.php', 'WeDevs\\Dokan\\ThemeSupport\\Divi' => __DIR__ . '/../..' . '/includes/ThemeSupport/Divi.php', 'WeDevs\\Dokan\\ThemeSupport\\Electro' => __DIR__ . '/../..' . '/includes/ThemeSupport/Electro.php', 'WeDevs\\Dokan\\ThemeSupport\\Enfold' => __DIR__ . '/../..' . '/includes/ThemeSupport/Enfold.php', 'WeDevs\\Dokan\\ThemeSupport\\Flatsome' => __DIR__ . '/../..' . '/includes/ThemeSupport/Flatsome.php', 'WeDevs\\Dokan\\ThemeSupport\\Manager' => __DIR__ . '/../..' . '/includes/ThemeSupport/Manager.php', 'WeDevs\\Dokan\\ThemeSupport\\Rehub' => __DIR__ . '/../..' . '/includes/ThemeSupport/Rehub.php', 'WeDevs\\Dokan\\ThemeSupport\\Storefront' => __DIR__ . '/../..' . '/includes/ThemeSupport/Storefront.php', 'WeDevs\\Dokan\\ThemeSupport\\TwentyTwenty' => __DIR__ . '/../..' . '/includes/ThemeSupport/TwentyTwenty.php', 'WeDevs\\Dokan\\Tracker' => __DIR__ . '/../..' . '/includes/Tracker.php', 'WeDevs\\Dokan\\Traits\\AjaxResponseError' => __DIR__ . '/../..' . '/includes/Traits/AjaxResponseError.php', 'WeDevs\\Dokan\\Traits\\ChainableContainer' => __DIR__ . '/../..' . '/includes/Traits/ChainableContainer.php', 'WeDevs\\Dokan\\Traits\\ObjectCache' => __DIR__ . '/../..' . '/includes/Traits/ObjectCache.php', 'WeDevs\\Dokan\\Traits\\RESTResponseError' => __DIR__ . '/../..' . '/includes/Traits/RESTResponseError.php', 'WeDevs\\Dokan\\Traits\\Singleton' => __DIR__ . '/../..' . '/includes/Traits/Singleton.php', 'WeDevs\\Dokan\\Traits\\TransientCache' => __DIR__ . '/../..' . '/includes/Traits/TransientCache.php', 'WeDevs\\Dokan\\Upgrade\\AdminNotice' => __DIR__ . '/../..' . '/includes/Upgrade/AdminNotice.php', 'WeDevs\\Dokan\\Upgrade\\Hooks' => __DIR__ . '/../..' . '/includes/Upgrade/Hooks.php', 'WeDevs\\Dokan\\Upgrade\\Manager' => __DIR__ . '/../..' . '/includes/Upgrade/Manager.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\BackgroundProcesses\\V_2_8_3_VendorBalance' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/BackgroundProcesses/V_2_8_3_VendorBalance.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\BackgroundProcesses\\V_2_9_16_StoreSettings' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/BackgroundProcesses/V_2_9_16_StoreSettings.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\BackgroundProcesses\\V_2_9_23_StoreName' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/BackgroundProcesses/V_2_9_23_StoreName.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\BackgroundProcesses\\V_2_9_4_OrderPostAuthor' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/BackgroundProcesses/V_2_9_4_OrderPostAuthor.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\BackgroundProcesses\\V_3_0_10_ProductAttributesAuthorId' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/BackgroundProcesses/V_3_0_10_ProductAttributesAuthorId.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\BackgroundProcesses\\V_3_1_1_RefundTableUpdate' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/BackgroundProcesses/V_3_1_1_RefundTableUpdate.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\BackgroundProcesses\\V_3_3_8_VendorStoreTimes' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/BackgroundProcesses/V_3_3_8_VendorStoreTimes.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\BackgroundProcesses\\V_3_6_2_UpdateProductCategories' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/BackgroundProcesses/V_3_6_2_UpdateProductCategories.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\BackgroundProcesses\\V_3_7_19_UpdateOrderMeta' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/BackgroundProcesses/V_3_7_19_UpdateOrderMeta.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_1_2' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_1_2.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_1' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_1.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_3' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_3.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_4_11' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_4_11.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_4_12' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_4_12.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_5_7' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_5_7.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_6_9' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_6_9.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_7_3' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_7_3.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_7_6' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_7_6.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_8_0' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_8_0.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_8_3' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_8_3.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_8_6' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_8_6.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_9_13' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_9_13.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_9_16' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_9_16.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_9_19' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_9_19.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_9_23' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_9_23.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_2_9_4' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_2_9_4.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_0_10' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_0_10.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_0_4' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_0_4.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_1_0' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_1_0.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_1_1' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_1_1.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_2_12' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_2_12.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_3_1' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_3_1.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_3_7' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_3_7.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_3_8' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_3_8.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_5_1' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_5_1.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_6_2' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_6_2.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_6_4' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_6_4.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_6_5' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_6_5.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_7_10' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_7_10.php', 'WeDevs\\Dokan\\Upgrade\\Upgrades\\V_3_7_19' => __DIR__ . '/../..' . '/includes/Upgrade/Upgrades/V_3_7_19.php', 'WeDevs\\Dokan\\Utilities\\OrderUtil' => __DIR__ . '/../..' . '/includes/Utilities/OrderUtil.php', 'WeDevs\\Dokan\\Vendor\\ChangeProductStatus' => __DIR__ . '/../..' . '/includes/Vendor/ChangeProductStatus.php', 'WeDevs\\Dokan\\Vendor\\Hooks' => __DIR__ . '/../..' . '/includes/Vendor/Hooks.php', 'WeDevs\\Dokan\\Vendor\\Manager' => __DIR__ . '/../..' . '/includes/Vendor/Manager.php', 'WeDevs\\Dokan\\Vendor\\SettingsApi\\Abstracts\\Gateways' => __DIR__ . '/../..' . '/includes/Vendor/SettingsApi/Abstracts/Gateways.php', 'WeDevs\\Dokan\\Vendor\\SettingsApi\\Abstracts\\Page' => __DIR__ . '/../..' . '/includes/Vendor/SettingsApi/Abstracts/Page.php', 'WeDevs\\Dokan\\Vendor\\SettingsApi\\Manager' => __DIR__ . '/../..' . '/includes/Vendor/SettingsApi/Manager.php', 'WeDevs\\Dokan\\Vendor\\SettingsApi\\Processor' => __DIR__ . '/../..' . '/includes/Vendor/SettingsApi/Processor.php', 'WeDevs\\Dokan\\Vendor\\SettingsApi\\Settings\\Pages\\Payments\\Gateways\\Bank' => __DIR__ . '/../..' . '/includes/Vendor/SettingsApi/Settings/Pages/Payments/Gateways/Bank.php', 'WeDevs\\Dokan\\Vendor\\SettingsApi\\Settings\\Pages\\Payments\\Gateways\\PayPal' => __DIR__ . '/../..' . '/includes/Vendor/SettingsApi/Settings/Pages/Payments/Gateways/PayPal.php', 'WeDevs\\Dokan\\Vendor\\SettingsApi\\Settings\\Pages\\Payments\\Payments' => __DIR__ . '/../..' . '/includes/Vendor/SettingsApi/Settings/Pages/Payments/Payments.php', 'WeDevs\\Dokan\\Vendor\\SettingsApi\\Settings\\Pages\\Store' => __DIR__ . '/../..' . '/includes/Vendor/SettingsApi/Settings/Pages/Store.php', 'WeDevs\\Dokan\\Vendor\\SetupWizard' => __DIR__ . '/../..' . '/includes/Vendor/SetupWizard.php', 'WeDevs\\Dokan\\Vendor\\StoreListsFilter' => __DIR__ . '/../..' . '/includes/Vendor/StoreListsFilter.php', 'WeDevs\\Dokan\\Vendor\\UserSwitch' => __DIR__ . '/../..' . '/includes/Vendor/UserSwitch.php', 'WeDevs\\Dokan\\Vendor\\Vendor' => __DIR__ . '/../..' . '/includes/Vendor/Vendor.php', 'WeDevs\\Dokan\\Vendor\\VendorCache' => __DIR__ . '/../..' . '/includes/Vendor/VendorCache.php', 'WeDevs\\Dokan\\Walkers\\Category' => __DIR__ . '/../..' . '/includes/Walkers/Category.php', 'WeDevs\\Dokan\\Walkers\\CategoryDropdownSingle' => __DIR__ . '/../..' . '/includes/Walkers/CategoryDropdownSingle.php', 'WeDevs\\Dokan\\Walkers\\StoreCategory' => __DIR__ . '/../..' . '/includes/Walkers/StoreCategory.php', 'WeDevs\\Dokan\\Walkers\\TaxonomyDropdown' => __DIR__ . '/../..' . '/includes/Walkers/TaxonomyDropdown.php', 'WeDevs\\Dokan\\Widgets\\BestSellingProducts' => __DIR__ . '/../..' . '/includes/Widgets/BestSellingProducts.php', 'WeDevs\\Dokan\\Widgets\\FilterByAttributes' => __DIR__ . '/../..' . '/includes/Widgets/FilterByAttributes.php', 'WeDevs\\Dokan\\Widgets\\Manager' => __DIR__ . '/../..' . '/includes/Widgets/Manager.php', 'WeDevs\\Dokan\\Widgets\\ProductCategoryMenu' => __DIR__ . '/../..' . '/includes/Widgets/ProductCategoryMenu.php', 'WeDevs\\Dokan\\Widgets\\StoreCategoryMenu' => __DIR__ . '/../..' . '/includes/Widgets/StoreCategoryMenu.php', 'WeDevs\\Dokan\\Widgets\\StoreContactForm' => __DIR__ . '/../..' . '/includes/Widgets/StoreContactForm.php', 'WeDevs\\Dokan\\Widgets\\StoreLocation' => __DIR__ . '/../..' . '/includes/Widgets/StoreLocation.php', 'WeDevs\\Dokan\\Widgets\\StoreOpenClose' => __DIR__ . '/../..' . '/includes/Widgets/StoreOpenClose.php', 'WeDevs\\Dokan\\Widgets\\TopratedProducts' => __DIR__ . '/../..' . '/includes/Widgets/TopratedProducts.php', 'WeDevs\\Dokan\\Withdraw\\Export\\CSV' => __DIR__ . '/../..' . '/includes/Withdraw/Export/CSV.php', 'WeDevs\\Dokan\\Withdraw\\Export\\Manager' => __DIR__ . '/../..' . '/includes/Withdraw/Export/Manager.php', 'WeDevs\\Dokan\\Withdraw\\Hooks' => __DIR__ . '/../..' . '/includes/Withdraw/Hooks.php', 'WeDevs\\Dokan\\Withdraw\\Manager' => __DIR__ . '/../..' . '/includes/Withdraw/Manager.php', 'WeDevs\\Dokan\\Withdraw\\Withdraw' => __DIR__ . '/../..' . '/includes/Withdraw/Withdraw.php', 'WeDevs\\Dokan\\Withdraw\\WithdrawCache' => __DIR__ . '/../..' . '/includes/Withdraw/WithdrawCache.php', 'WeDevs\\Dokan\\Withdraw\\Withdraws' => __DIR__ . '/../..' . '/includes/Withdraw/Withdraws.php');
        public static function getInitializer(\Composer\Autoload\ClassLoader $loader)
        {
        }
    }
}
namespace {
    class HttpBuildUrlTest extends \PHPUnit_Framework_TestCase
    {
        private $full_url = "http://user:pass@www.example.com:8080/pub/index.php?a=b#files";
        /**
         * Test example one.
         *
         * @see http://us2.php.net/manual/en/function.http-build-url.php
         */
        public function testExampleOne()
        {
        }
        public function trailingSlashProvider()
        {
        }
        /**
         * @dataProvider trailingSlashProvider
         */
        public function testTrailingSlash($expected, $config)
        {
        }
        public function testUrlQueryArrayIsIgnored()
        {
        }
        public function testPartsQueryArrayIsIgnored()
        {
        }
        public function testAcceptStrings()
        {
        }
        public function testAcceptArrays()
        {
        }
        public function testDefaults()
        {
        }
        public function testNewUrl()
        {
        }
        /**
         * @dataProvider queryProvider
         */
        public function testJoinQuery($query, $expected)
        {
        }
        /**
         * @dataProvider pathProvider
         */
        public function testJoinPath($path, $expected)
        {
        }
        public function testJoinPathTwo()
        {
        }
        /**
         * @dataProvider bitmaskProvider
         */
        public function testBitmasks($constant, $expected)
        {
        }
        public function pathProvider()
        {
        }
        public function queryProvider()
        {
        }
        public function bitmaskProvider()
        {
        }
    }
}
/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Composer\Autoload {
    /**
     * Scope isolated include.
     *
     * Prevents access to $this/self from included files.
     *
     * @param  string $file
     * @return void
     * @private
     */
    function includeFile($file)
    {
    }
}
namespace {
    /**
     * Wrapper for wc_doing_it_wrong.
     *
     * @since 3.0.0
     *
     * @param string $function Function used.
     * @param string $message Message to log.
     * @param string $version Version the message was added in.
     *
     * @return void
     */
    function dokan_doing_it_wrong($function, $message, $version)
    {
    }
    /**
     * Dokan get product status
     *
     * @since 2.5
     *
     * @deprecated 2.5.1
     *
     * @return string|array
     **/
    function dokan_get_product_status($status)
    {
    }
    /**
     * Load depericated widget class dynamically
     *
     * @since 3.0.0
     *
     * @return void
     */
    function dokan_depricated_widget_classes()
    {
    }
    /**
     * Depricated function for render seller metabox in product
     *
     * @param object $post
     *
     * @return void|html
     */
    function dokan_seller_meta_box($post)
    {
    }
    /**
     * Support for Elementor Store Widgets
     *
     * @since 3.0.0
     *
     * @param array             $default_widget_args
     * @param \Widget_WordPress $widget_wordpress
     *
     * @return array
     */
    function dokan_depricated_elementor_store_widgets($default_widget_args, $widget_wordpress)
    {
    }
    /**
     * Load Dokan Plugin when all plugins loaded
     *
     * @return WeDevs_Dokan
     */
    function dokan()
    {
    }
    /**
     * Get help documents for admin
     *
     * @since 2.8
     *
     * @return Object
     */
    function dokan_admin_get_help()
    {
    }
    /**
     * Dokan Get Admin report data
     *
     * @since 2.8.0
     *
     * @param string $group_by
     * @param string $year
     * @param string $start
     * @param string $end
     * @param int    $seller_id
     *
     * @return array
     */
    function dokan_admin_report_data($group_by = 'day', $year = '', $start = '', $end = '', $seller_id = 0)
    {
    }
    /**
     * Generate report in admin area
     *
     * @param string $group_by
     * @param string $year
     * @param string $start
     * @param string $end
     *
     * @deprecated 3.8.0 since we are getting the report data from REST API (dokan/v1/report), we don't need this function anymore.
     *
     * @return array
     */
    function dokan_admin_report($group_by = 'day', $year = '', $start = '', $end = '')
    {
    }
    /**
     * Generate Earning report By seller in admin area
     *
     * @param int     $chosen_seller_id
     *
     * @global object $wp_locale
     *
     * @global WPDB   $wpdb
     * @deprecated 3.8.0 since we are getting the report data from REST API (dokan/v1/report), we don't need this function anymore.
     *
     * @return array
     */
    function dokan_admin_report_by_seller($chosen_seller_id = 0)
    {
    }
    /**
     * Dokan get seller amount from order total
     *
     * @param int $order_id
     *
     * @deprecated 3.8.0
     *
     * @return float|array|WP_Error
     */
    function dokan_get_seller_amount_from_order($order_id, $get_array = \false)
    {
    }
    /**
     * Get all the orders from a specific seller
     *
     * @since      3.6.3 Rewritten whole method
     *
     * @param int   $seller_id
     * @param array $args
     *
     * @deprecated 3.8.0 since this is an alias only.
     *
     * @return WP_Error|int[]|WC_Order[]
     */
    function dokan_get_seller_orders($seller_id, $args)
    {
    }
    /**
     * Get all the orders from a specific date range
     *
     * @param string    $start_date
     * @param string    $end_date
     * @param int|false $seller_id
     * @param string    $status
     *
     * @deprecated 3.8.0
     *
     * @return WP_Error|WC_Order[]
     */
    function dokan_get_seller_orders_by_date($start_date, $end_date, $seller_id = \false, $status = 'all')
    {
    }
    /**
     * Get the orders total from a specific seller
     *
     * @param array $args
     *
     * @deprecated 3.8.0
     *
     * @return int
     */
    function dokan_get_seller_orders_number($args = [])
    {
    }
    /**
     * Get seller withdraw by date range
     *
     * @param string    $start_date
     * @param string    $end_date
     * @param int|false $seller_id
     *
     * @return object
     */
    function dokan_get_seller_withdraw_by_date($start_date, $end_date, $seller_id = \false)
    {
    }
    /**
     * Check if order is belonged to given seller
     *
     * @param int $seller_id
     * @param int $order_id
     *
     * @return bool
     */
    function dokan_is_seller_has_order($seller_id, $order_id)
    {
    }
    /**
     * Count orders for a seller
     *
     * @since 3.8.0 moved the functionality of this function to Order Manager class
     *
     * @param int $seller_id
     *
     * @return array
     */
    function dokan_count_orders($seller_id)
    {
    }
    /**
     * Delete an order row from sync table when an order is deleted from WooCommerce
     *
     * @param int $order_id
     *
     * @deprecated 3.8.0
     *
     * @return void
     */
    function dokan_delete_sync_order($order_id)
    {
    }
    /**
     * Delete an order row from sync table to not insert duplicate
     *
     * @since      2.4.11
     *
     * @param int $order_id
     * @param int $seller_id
     *
     * @deprecated 3.8.0
     *
     * @return void
     */
    function dokan_delete_sync_duplicate_order($order_id, $seller_id)
    {
    }
    /**
     * Insert an order in sync table once an order is created
     *
     * @param int $order_id
     *
     * @return void
     */
    function dokan_sync_insert_order($order_id)
    {
    }
    /**
     * Get a seller ID based on WooCommerce order.
     *
     * If Order has suborder, this method will return 0
     *
     * @since        3.2.11 rewritten entire function
     *
     * @param int|WC_Abstract_Order $order
     *
     * @return int | 0 on failure
     */
    function dokan_get_seller_id_by_order($order)
    {
    }
    /**
     * Get bootstrap label class based on order status
     *
     * @param string $status
     *
     * @return string
     */
    function dokan_get_order_status_class($status)
    {
    }
    /**
     * Get translated string of order status
     *
     * @param string $status
     *
     * @return string
     */
    function dokan_get_order_status_translated($status)
    {
    }
    /**
     * Get product items list from order seperated by given glue
     *
     * @since 1.4
     *
     * @param WC_Order $order
     * @param string   $glue
     *
     * @return string list of products
     */
    function dokan_get_product_list_by_order($order, $glue = ',')
    {
    }
    /**
     * Get if an order is a sub order or not
     *
     * @since 2.4.11
     *
     * @param int|WC_Abstract_Order $order
     *
     * @return boolean
     */
    function dokan_is_sub_order($order)
    {
    }
    /**
     * Get total number of orders in Dokan order table
     *
     * @since      2.4.3
     *
     * @deprecated 3.8.0
     *
     * @return  int Order_count
     */
    function dokan_total_orders()
    {
    }
    /**
     * Return array of sellers with items
     *
     * @since 2.4.4
     * @since 2.9.11 Param can be an instance of WC_Order
     *
     * @param WC_Order|int $order
     *
     * @return array $sellers_with_items
     */
    function dokan_get_sellers_by($order)
    {
    }
    /**
     * Return unique array of seller_ids from an order
     *
     * @since 2.4.9
     *
     * @param int $order_id
     *
     * @return array $seller_ids
     */
    function dokan_get_seller_ids_by($order_id)
    {
    }
    /**
     * Get suborder ids by parent order id
     *
     * @param int $parent_order_id
     *
     * @return int[]|null
     */
    function dokan_get_suborder_ids_by($parent_order_id)
    {
    }
    /**
     * Return admin commission from an order
     *
     * @since      2.4.12
     *
     * @param WC_Order $order
     * @param string   $context accepted values are seller and admin
     *
     * @deprecated 2.9.21
     *
     * @return float
     */
    function dokan_get_admin_commission_by($order, $context)
    {
    }
    /**
     * Get Customer Order IDs by Seller
     *
     * @since      2.6.6
     *
     * @param int $customer_id
     * @param int $seller_id
     *
     * @deprecated 3.8.0
     *
     * @return array|null on failure
     */
    function dokan_get_customer_orders_by_seller($customer_id, $seller_id)
    {
    }
    /**
     * Header rows for CSV order export
     *
     * @since 2.8.6
     *
     * @return array
     */
    function dokan_order_csv_headers()
    {
    }
    /**
     * Export orders to a CSV file
     *
     * @since 2.8.6
     *
     * @param array  $orders
     * @param string $file A file name to write to
     *
     * @return void
     */
    function dokan_order_csv_export($orders, $file = \null)
    {
    }
    /**
     * Dokan get seller id by order id
     *
     * @param int $order_id
     *
     * @deprecated 3.8.0
     *
     * @return int
     */
    function dokan_get_seller_id_by_order_id($order_id)
    {
    }
    /**
     * Check if an order with same id is exists in database
     *
     * @param int $order_id
     *
     * @deprecated 3.8.0
     *
     * @return boolean
     */
    function dokan_is_order_already_exists($order_id)
    {
    }
    /**
     * Customer has order from current seller
     *
     * @since 2.8.6
     * @since 3.8.0 moved this function from includes/functions.php
     *
     * @param int      $customer_id
     * @param int|null $seller_id
     *
     * @return bool
     */
    function dokan_customer_has_order_from_this_seller($customer_id, $seller_id = \null)
    {
    }
    /**
     * Get total sales amount of a seller
     *
     * @since 3.8.0 moved from includes/functions.php
     *
     * @param int $seller_id
     *
     * @return float
     */
    function dokan_author_total_sales($seller_id)
    {
    }
    /**
     * Get Seller's net Earnings from a order
     *
     * @since      2.5.2
     * @since      3.8.0 moved from includes/functions.php
     *
     * @param WC_ORDER $order
     * @param int      $seller_id
     *
     * @deprecated 3.8.0
     *
     * @return int $earned
     */
    function dokan_get_seller_earnings_by_order($order, $seller_id)
    {
    }
    /**
     * Dokan get vendor order details by order ID
     *
     * @since 3.2.11 rewritten entire function
     * @since 3.8.0 Moved this function from includes/functions.php
     *
     * @param int      $order_id
     * @param int|null $vendor_id will remove this parameter in future
     *
     * @return array will return empty array in case order has suborders
     */
    function dokan_get_vendor_order_details($order_id, $vendor_id = \null)
    {
    }
    /**
     * Updates bulk orders status by orders ids.
     *
     * @since 3.7.10
     * @since 3.8.0 Moved this method from includes/functions.php file
     *
     * @param array $postdata
     *
     * @return void
     */
    function dokan_apply_bulk_order_status_change($postdata)
    {
    }
    /**
     * Dokan insert new product
     *
     * @since  2.5.1
     *
     * @param array $args
     *
     * @return int|bool|WP_Error
     */
    function dokan_save_product($args)
    {
    }
    /**
     * Show options for the variable product type.
     *
     * @since 2.5.3
     *
     * @return void
     */
    function dokan_product_output_variations()
    {
    }
    /**
     * Get product visibility options.
     *
     * @since 3.0.0
     *
     * @return array
     */
    function dokan_get_product_visibility_options()
    {
    }
    /**
     * Search product data for a term and users ids and return only ids.
     *
     * @param string $term
     * @param string $user_ids
     * @param string $type               of product
     * @param bool   $include_variations in search or not
     *
     * @return array of ids
     */
    function dokan_search_seller_products($term, $user_ids = \false, $type = '', $include_variations = \false)
    {
    }
    /**
     * Callback for array filter to get products the user can edit only.
     *
     * @since  2.6.8
     *
     * @param WC_Product $product
     *
     * @return bool
     */
    function dokan_products_array_filter_editable($product)
    {
    }
    /**
     * Get row action for product
     *
     * @since 2.7.3
     * @since 3.7.11 Added `$format_html` as an optional parameter
     *
     * @param object|int|string $post
     * @param bool              $format_html (Optional)
     *
     * @return array
     */
    function dokan_product_get_row_action($post, $format_html = \true)
    {
    }
    /**
     * Dokan get vendor by product
     *
     * @param int|WC_Product $product Product ID or Product Object
     * @param bool $get_vendor return true to get vendor id, otherwise it will return \WeDevs\Dokan\Vendor\Vendor object
     *
     * @since  2.9.8
     * @since 3.2.16 added $id parameter
     *
     * @return int|\WeDevs\Dokan\Vendor\Vendor|false on failure
     */
    function dokan_get_vendor_by_product($product, $get_vendor_id = \false)
    {
    }
    /**
     * Get translated product stock status
     *
     * @since 3.0.0
     *
     * @param mix $stock
     *
     * @return string | array if stock parameter is not provided
     */
    function dokan_get_translated_product_stock_status($stock = \false)
    {
    }
    /**
     * Get dokan store products filter catalog orderby
     *
     * @since DOKAN_LITE_SINCE
     *
     * @return array
     */
    function dokan_store_product_catalog_orderby()
    {
    }
    /**
     * Get default withdraw methods for vendor
     *
     * @since 1.0.0
     *
     * @return array
     */
    function dokan_withdraw_register_methods()
    {
    }
    /**
     * Get registered withdraw methods suitable for Settings Api
     *
     * @return array
     */
    function dokan_withdraw_get_methods()
    {
    }
    /**
     * Get active withdraw methods.( Default is paypal )
     *
     * @since 3.7.10 To filter out all the active payment methods only.
     *
     * @return array
     */
    function dokan_withdraw_get_active_methods()
    {
    }
    /**
     * Get active withdraw methods for seller.
     *
     * @since 3.0.0 add $vendor_id param
     *
     * @param int $vendor_id Seller vendor id
     *
     * @return array
     */
    function dokan_get_seller_active_withdraw_methods($vendor_id = 0)
    {
    }
    /**
     * Get a single withdraw method based on key
     *
     * @param string $method_key
     *
     * @return bool|array
     */
    function dokan_withdraw_get_method($method_key)
    {
    }
    /**
     * Get title from a withdraw method
     *
     * @param string      $method_key
     * @param object|null $request //@since 3.3.7
     *
     * @return string
     */
    function dokan_withdraw_get_method_title($method_key, $request = \null)
    {
    }
    /**
     * Callback for PayPal in store settings
     *
     * @param array    $store_settings
     *
     * @return void
     */
    function dokan_withdraw_method_paypal($store_settings)
    {
    }
    /**
     * Callback for Skrill in store settings
     *
     * @param array    $store_settings
     *
     * @return void
     */
    function dokan_withdraw_method_skrill($store_settings)
    {
    }
    /**
     * Callback for Bank in store settings
     *
     * @param array    $store_settings
     *
     * @return void
     */
    function dokan_withdraw_method_bank($store_settings)
    {
    }
    /**
     * Returns vendors bank payment require fields.
     *
     * @since 3.7.0
     *
     * @return array
     */
    function dokan_bank_payment_required_fields()
    {
    }
    /**
     * Available bank payment fields in dokan.
     *
     * @since 3.7.0
     *
     * @return array
     */
    function dokan_bank_payment_available_fields()
    {
    }
    /**
     * Dokan bank payment fields placeholders.
     * Anyone can update any placeholder using 'dokan_bank_payment_fields_placeholders'
     *
     * @since 3.7.7
     *
     * @return array
     */
    function dokan_bank_payment_fields_placeholders()
    {
    }
    /**
     * Get withdraw counts, used in admin area
     *
     * @param int $user_id User ID
     *
     * @return array
     */
    function dokan_get_withdraw_count($user_id = \null)
    {
    }
    /**
     * Get active withdraw order status.
     *
     * Default is 'completed', 'processing', 'on-hold'
     *
     * @return array
     */
    function dokan_withdraw_get_active_order_status()
    {
    }
    /**
     * Get comma seperated value from "dokan_withdraw_get_active_order_status()" return array
     *
     * @return string
     */
    function dokan_withdraw_get_active_order_status_in_comma()
    {
    }
    /**
     * Get withdraw method formatted icon.
     *
     * @since 3.4.3
     *
     * @param string $method_key Withdraw Method key
     *
     * @return string
     */
    function dokan_withdraw_get_method_icon($method_key)
    {
    }
    /**
     * Get withdraw method additional info.
     *
     * @since 3.3.7
     *
     * @param string $method_key Withdraw Method key
     *
     * @return string
     */
    function dokan_withdraw_get_method_additional_info($method_key)
    {
    }
    /**
     * Get the default withdrawal method.
     *
     * @since 3.3.7
     *
     * @param int $vendor_id
     *
     * @return string
     */
    function dokan_withdraw_get_default_method($vendor_id = 0)
    {
    }
    /**
     * Check if manual withdraw request sending enabled.
     *
     * @since 3.3.7
     *
     * @return bool
     */
    function dokan_withdraw_is_manual_request_enabled()
    {
    }
    /**
     * Check if `Hide Withdraw Option` is enabled and hide withdraw dashboard.
     *
     * @since 3.3.7
     *
     * @return bool
     */
    function dokan_withdraw_is_disabled()
    {
    }
    /**
     * Get the payment methods that are eligable for manual/schedule withdraw.
     *
     * @since 3.3.7
     *
     * @return array
     */
    function dokan_withdraw_get_withdrawable_active_methods()
    {
    }
    /**
     * Check if a withdrawal method is enabled in Dokan > Settings > Withdraw options
     *
     * @since 3.6.1
     *
     * @param string $method_id The method id of withdraw method
     *
     * @retun bool
     */
    function dokan_is_withdraw_method_enabled($method_id)
    {
    }
    /**
     * Get registered withdraw methods suitable for Settings Api
     *
     * @return array
     */
    function dokan_withdraw_get_chargeable_methods()
    {
    }
    /**
     * Returns all withdraw methods charges saved.
     *
     * @since 3.9.6
     *
     * @return array
     */
    function dokan_withdraw_get_method_charges()
    {
    }
    /**
     * Wrapper functions to keep BackWards compatibility with WC 2.6 and older versions
     */
    /**
     * Get product method made backwards compatible
     *
     * @since 2.5.7
     *
     * @param WC_Product $product
     *
     * @return WC_Product
     */
    function dokan_wc_get_product($product)
    {
    }
    /**
     * Dynamically access new properties with backwards compatibility
     *
     * @since 2.5.7
     *
     * @param Object $object
     *
     * @param String $prop
     *
     * @param String $callback If the object is fetched using a different callback
     *
     * @return $prop
     */
    function dokan_get_prop($object, $prop, $callback = \false)
    {
    }
    /**
     * Dynamically access new properties with backwards compatibility
     *
     * @since 2.5.7
     *
     * @param Object $object
     *
     * @param String $prop
     *
     * @param String $callback If the object is fetched using a different callback
     *
     * @return $prop
     */
    function dokan_replace_func($old_method, $new_method, $object = \null)
    {
    }
    /**
     * Get order created date
     *
     * @since 2.5.7
     *
     * @param WC_Order $order
     *
     * @return String date
     */
    function dokan_get_date_created($order)
    {
    }
    /**
     * Get meta data for given item_id
     *
     * @since 2.5.7
     *
     * @param WC_Order $order
     *
     * @param int $item_id
     *
     * @return $metadata
     */
    function dokan_get_metadata($order, $item_id)
    {
    }
    /**
     * Get download files for given product
     *
     * @since 2.5.8
     *
     * @param WC_Product $product
     * @return array $downloads
     */
    function dokan_get_product_downloads($product)
    {
    }
    /**
     * Save variation product price.
     *
     * @since 2.5.8
     *
     * @param int $product_id
     * @param string $regular_price
     * @param string $sale_price
     * @param string $date_from
     * @param string $date_to
     */
    function dokan_save_product_price($product_id, $regular_price, $sale_price = '', $date_from = '', $date_to = '')
    {
    }
    /**
     * Process product files download paths
     *
     * @since 2.5.8
     *
     * @global type $wpdb
     * @param int $product_id
     * @param int $variation_id
     * @param array $downloadable_files
     */
    function dokan_process_product_file_download_paths_permission($product_id, $variation_id, $downloadable_files)
    {
    }
    /**
     * Sort navigation menu items by position
     *
     * @since 3.10.0 moved this method from includes/template-tags.php
     *
     * @param array $a first item
     * @param array $b second item
     *
     * @return int
     */
    function dokan_nav_sort_by_pos($a, $b)
    {
    }
    /**
     * Get Dashboard Navigation menus
     *
     * @since 3.10.0 moved this method from includes/template-tags.php
     *
     * @return array
     */
    function dokan_get_dashboard_nav() : array
    {
    }
    /**
     * Checking menu permissions
     *
     * @since 2.7.3
     * @since 3.10.0 moved this method from includes/template-tags.php
     *
     * @return boolean
     */
    function dokan_check_menu_permission($menu)
    {
    }
    /**
     * Renders the Dokan dashboard menu
     *
     * For settings menu, the active menu format is `settings/menu_key_name`.
     * The active menu will be split at `/` and the `menu_key_name` will be matched
     * with a settings sub menu array. If it's a match, the settings menu will be shown
     * only. Otherwise, the main navigation menu will be shown.
     *
     * @since 3.10.0 moved this method from includes/template-tags.php
     *
     * @param string $active_menu
     *
     * @return string rendered menu HTML
     */
    function dokan_dashboard_nav($active_menu = '')
    {
    }
    /**
     * This method will verify store id, will be used only with rest api validate callback
     *
     * @since 3.8.0
     *
     * @param $value
     * @param $request WP_REST_Request
     * @param $key
     *
     * @return bool|WP_Error
     */
    function dokan_rest_validate_store_id($value, $request, $key)
    {
    }
    /**
     * This method will verify an order id, will be used only with rest api validate callback
     *
     * @since 3.9.7
     *
     * @param $value
     * @param $request WP_REST_Request
     * @param $key
     *
     * @return bool|WP_Error
     */
    function dokan_rest_validate_order_id($value, $request, $key)
    {
    }
    /**
     * Dokan Admin menu position
     *
     * @since 3.0.0
     *
     * @return string
     */
    function dokan_admin_menu_position()
    {
    }
    /**
     * Dokan Admin menu capability
     *
     * @since 3.0.0
     *
     * @return string
     */
    function dokana_admin_menu_capability()
    {
    }
    /**
     * Dokan Admin menu capability
     *
     * @since 3.8.3
     *
     * @return string
     */
    function dokan_admin_menu_capability()
    {
    }
    /**
     * Dokan Get current user id
     *
     * @since 2.7.3
     *
     * @return int
     */
    function dokan_get_current_user_id()
    {
    }
    /**
     * Check if a user is seller
     *
     * @param int $user_id
     *
     * @return bool
     */
    function dokan_is_user_seller($user_id)
    {
    }
    /**
     * Check if a user is customer
     *
     * @param int $user_id
     *
     * @return bool
     */
    function dokan_is_user_customer($user_id)
    {
    }
    /**
     * Check if current user is the product author
     *
     * @param int      $product_id
     *
     * @return bool
     */
    function dokan_is_product_author($product_id = 0)
    {
    }
    /**
     * Check if it's a store page
     *
     * @return bool
     */
    function dokan_is_store_page()
    {
    }
    /**
     * Check if it's product edit page
     *
     * @since 3.0
     *
     * @return bool
     */
    function dokan_is_product_edit_page()
    {
    }
    /**
     * Check if it's a Seller Dashboard page
     *
     * @since 2.4.9
     *
     * @return bool
     */
    function dokan_is_seller_dashboard()
    {
    }
    /**
     * Redirect to login page if not already logged in
     *
     * @return void
     */
    function dokan_redirect_login()
    {
    }
    /**
     * If the current user is not seller, redirect to homepage
     *
     * @param string $redirect
     */
    function dokan_redirect_if_not_seller($redirect = '')
    {
    }
    /**
     * Count post type from a user
     *
     * @param string $post_type
     * @param int    $user_id
     * @param array  $exclude_product_types The product types that will be excluded from count
     *
     * @return array
     */
    function dokan_count_posts($post_type, $user_id, $exclude_product_types = ['booking', 'auction'])
    {
    }
    /**
     * Count stock product type from a user
     *
     * @since DOKAN_LITE_SINCE
     *
     * @param string $post_type
     * @param int    $user_id
     * @param string $stock_type
     * @param array  $exclude_product_types
     *
     * @return int $counts
     */
    function dokan_count_stock_posts($post_type, $user_id, $stock_type, $exclude_product_types = ['booking', 'auction'])
    {
    }
    /**
     * Get comment count based on post type and user id
     *
     * @param string   $post_type
     * @param int      $user_id
     *
     * @return array
     */
    function dokan_count_comments($post_type, $user_id)
    {
    }
    /**
     * Get total pageview for a seller
     *
     * @param int   $seller_id
     *
     * @return int
     */
    function dokan_author_pageviews($seller_id)
    {
    }
    /**
     * Get store seller percentage settings
     *
     * @param int $seller_id
     * @param int $product_id
     *
     * @return int
     */
    function dokan_get_seller_percentage($seller_id = 0, $product_id = 0, $category_id = 0)
    {
    }
    /**
     * Get Dokan commission type by seller or product or both
     *
     * @since 2.6.9
     *
     * @param int $seller_id
     * @param int $product_id
     *
     * @return string $type
     */
    function dokan_get_commission_type($seller_id = 0, $product_id = 0, $category_id = 0)
    {
    }
    /**
     * Get the default product status for new and edited product for seller based on settings
     *
     * @since 3.8.2
     *
     * @param int|null $seller_id
     *
     * @return string
     */
    function dokan_get_default_product_status($seller_id = \null)
    {
    }
    /**
     * Get product status based on user id and settings
     *
     * @since 3.7.20 added a new filter hook `dokan_get_new_post_status`
     *
     * @since 3.8.2 made the function deprecated
     *
     * @param int|null $seller_id
     *
     * @deprecated 3.8.2 use `dokan_get_default_product_status` instead
     *
     * @return string
     */
    function dokan_get_new_post_status($seller_id = \null)
    {
    }
    /**
     * Function to get the client ip address
     *
     * @since 3.3.1 Updated some logic
     *
     * @return string
     */
    function dokan_get_client_ip()
    {
    }
    /**
     * Generate an input box based on arguments
     *
     * @param int    $post_id
     * @param string $meta_key
     * @param array  $attr
     * @param string $type
     */
    function dokan_post_input_box($post_id, $meta_key, $attr = [], $type = 'text')
    {
    }
    /**
     * Get user-friendly post status based on post
     *
     * @param string $status
     *
     * @return string|array
     */
    function dokan_get_post_status($status = '')
    {
    }
    function dokan_get_available_post_status($product_id = 0)
    {
    }
    /**
     * Get user friendly post status label based class
     *
     * @param string $status
     *
     * @return string|array
     */
    function dokan_get_post_status_label_class($status = '')
    {
    }
    /**
     * Get readable product type based on product
     *
     * @param string $status
     *
     * @return string
     */
    function dokan_get_product_types($status = '')
    {
    }
    /**
     * Helper function for input text field
     *
     * @param string $key
     *
     * @return string
     */
    function dokan_posted_input($key, $array = \false)
    {
    }
    /**
     * Helper function for input textarea
     *
     * @param string $key
     *
     * @return string
     */
    function dokan_posted_textarea($key)
    {
    }
    /**
     * Get template part implementation for wedocs
     *
     * Looks at the theme directory first
     */
    function dokan_get_template_part($slug, $name = '', $args = [])
    {
    }
    /**
     * Get other templates (e.g. product attributes) passing attributes and including the file.
     *
     * @param mixed  $template_name
     * @param array  $args          (default: array())
     * @param string $template_path (default: '')
     * @param string $default_path  (default: '')
     *
     * @return void
     */
    function dokan_get_template($template_name, $args = [], $template_path = '', $default_path = '')
    {
    }
    /**
     * Locate a template and return the path for inclusion.
     *
     * This is the load order:
     *
     *      yourtheme       /   $template_path  /   $template_name
     *      yourtheme       /   $template_name
     *      $default_path   /   $template_name
     *
     * @param mixed  $template_name
     * @param string $template_path (default: '')
     * @param string $default_path  (default: '')
     *
     * @return string
     */
    function dokan_locate_template($template_name, $template_path = '', $default_path = '', $pro = \false)
    {
    }
    /**
     * Get page permalink based on context
     *
     * @param string $page
     * @param string $context
     * @param string $subpage
     *
     * @return string url of the page
     */
    function dokan_get_page_url($page, $context = 'dokan', $subpage = '')
    {
    }
    /**
     * Add subpage to url: this will add wpml like plugin compatibility
     *
     * @since 3.2.14
     *
     * @param string $subpage
     *
     * @param string $url
     *
     * @return false|string
     */
    function dokan_add_subpage_to_url($url, $subpage)
    {
    }
    /**
     * Get edit product url
     *
     * @param int|WC_Product $product
     * @param bool $is_new_product Is new product. Default `false`.
     *
     * @return string|false on failure
     */
    function dokan_edit_product_url($product, bool $is_new_product = \false)
    {
    }
    /**
     * Ads additional columns to admin user table
     *
     * @param array $columns
     *
     * @return array
     */
    function dokan_admin_product_columns($columns)
    {
    }
    /**
     * Get the value of a settings field
     *
     * @param string $option  settings field name
     * @param string $section the section name this field belongs to
     * @param string $default default text if it's not found
     *
     * @return mixed
     */
    function dokan_get_option($option, $section, $default = '')
    {
    }
    /**
     * Redirect users from standard WordPress register page to woocommerce
     * my account page
     *
     * @global string $action
     */
    function dokan_redirect_to_register()
    {
    }
    /**
     * Check if the seller is enabled
     *
     * @since 3.10.0 New filter added `dokan_is_seller_enabled`
     *
     * @param int $user_id
     *
     * @return bool
     */
    function dokan_is_seller_enabled($user_id) : bool
    {
    }
    /**
     * Check if the seller is trusted
     *
     * @param int $user_id
     *
     * @return bool
     */
    function dokan_is_seller_trusted($user_id)
    {
    }
    /**
     * Get store page url of a seller
     *
     * @param int $user_id
     *
     * @return string
     */
    function dokan_get_store_url($user_id)
    {
    }
    /**
     * Get current page URL.
     *
     * @since 3.9.1
     *
     * @return string
     */
    function dokan_get_current_page_url()
    {
    }
    /**
     * Check if current page is store review page
     *
     * @since 2.2
     *
     * @return bool
     */
    function dokan_is_store_review_page()
    {
    }
    /**
     * Helper function for logging
     *
     * For valid levels, see `WC_Log_Levels` class
     *
     * Description of levels:
     *     'emergency': System is unusable.
     *     'alert': Action must be taken immediately.
     *     'critical': Critical conditions.
     *     'error': Error conditions.
     *     'warning': Warning conditions.
     *     'notice': Normal but significant condition.
     *     'info': Informational messages.
     *     'debug': Debug-level messages.
     *
     * @param string $message
     *
     * @return void
     */
    function dokan_log($message, $level = 'debug')
    {
    }
    /**
     * Filter WP Media Manager files if the current user is seller.
     *
     * Do not show other sellers images to a seller. He can see images only by him
     *
     * @param array $args
     *
     * @return array
     */
    function dokan_media_uploader_restrict($args)
    {
    }
    /**
     * Get store info based on seller ID
     *
     * @param int $seller_id
     *
     * @return array
     */
    function dokan_get_store_info($seller_id)
    {
    }
    /**
     * Get tabs for showing in a single store page
     *
     * @since 2.2
     *
     * @param int $store_id
     *
     * @return array
     */
    function dokan_get_store_tabs($store_id)
    {
    }
    /**
     * Get withdraw email method based on seller ID and type
     *
     * @param int    $seller_id
     * @param string $type
     *
     * @return string
     */
    function dokan_get_seller_withdraw_mail($seller_id, $type = 'paypal')
    {
    }
    /**
     * Get seller bank details
     *
     * @param int $seller_id
     *
     * @return string
     */
    function dokan_get_seller_bank_details($seller_id)
    {
    }
    /**
     * Get seller listing
     *
     * @param array $args
     *
     * @return array
     */
    function dokan_get_sellers($args = [])
    {
    }
    /**
     * Put data with post_date's into an array of times
     *
     * @param array  $data       array of your data
     * @param string $date_key   key for the 'date' field. e.g. 'post_date'
     * @param string $data_key   key for the data you are charting
     * @param int    $interval
     * @param int    $start_date timestamp
     * @param string $group_by
     *
     * @return array
     */
    function dokan_prepare_chart_data($data, $date_key, $data_key, $interval, $start_date, $group_by)
    {
    }
    /**
     * Disable selling capability by default once a seller is registered
     *
     * @param int $user_id
     */
    function dokan_admin_user_register($user_id)
    {
    }
    /**
     * Get percentage based owo two numeric data
     *
     * @param int $this_period
     * @param int $last_period
     *
     * @return array
     */
    function dokan_get_percentage_of($this_period = 0, $last_period = 0)
    {
    }
    /**
     * Get seller count based on enable, disabled sellers and time period
     *
     * @param string $from
     * @param string $to
     *
     * @return array
     */
    function dokan_get_seller_count($from = \null, $to = \null)
    {
    }
    /**
     * Get product count of this month and last month with percentage
     *
     * @param string $from
     * @param string $to
     *
     * @return array
     */
    function dokan_get_product_count($from = \null, $to = \null, $seller_id = \null)
    {
    }
    /**
     * Dokan prepare date query
     *
     * @param string $from
     * @param string $to
     *
     * @return array
     */
    function dokan_prepare_date_query($from, $to)
    {
    }
    /**
     * Get seles count based on this month and last month
     *
     * @global WPDB $wpdb
     *
     * @return array
     */
    function dokan_get_sales_count($from = \null, $to = \null, $seller_id = 0)
    {
    }
    /**
     * Prevent sellers and customers from seeing the admin bar
     *
     * @param bool $show_admin_bar
     *
     * @return bool
     */
    function dokan_disable_admin_bar($show_admin_bar)
    {
    }
    /**
     * Filter products of current user
     *
     * @since 2.7.3
     *
     * @param object $query
     *
     * @return object $query
     */
    function dokan_filter_product_for_current_vendor($query)
    {
    }
    /**
     * Remove sellerdiv metabox when a seller can access the backend
     *
     * @since 2.7.8
     *
     * @return void
     */
    function dokan_remove_sellerdiv_metabox()
    {
    }
    /**
     * Human readable number format.
     *
     * Shortens the number by dividing 1000
     *
     * @param float|int $number
     *
     * @return float|int|string
     */
    function dokan_number_format($number)
    {
    }
    /**
     * Get coupon edit url
     *
     * @param int    $coupon_id
     * @param string $coupon_page
     *
     * @return string
     */
    function dokan_get_coupon_edit_url($coupon_id, $coupon_page = '')
    {
    }
    /**
     * Filter `get_avatar_url` to retrieve image url from dokan profile settings
     * called by `get_avatar_url()` as well as `get_avatar()`
     *
     * @since 2.7.0
     *
     * @param string $url         avatar url
     * @param mixed  $id_or_email userdata or user_id or user_email
     * @param array  $args        arguments
     *
     * @return string maybe modified url
     */
    function dokan_get_avatar_url($url, $id_or_email, $args)
    {
    }
    /**
     * Get navigation url for the dokan dashboard
     *
     * @param string $name endpoint name
     *
     * @return string url
     */
    function dokan_get_navigation_url($name = '')
    {
    }
    /**
     * Generate country dropdwon
     *
     * @param array  $options
     * @param string $selected
     * @param bool   $everywhere
     */
    function dokan_country_dropdown($options, $selected = '', $everywhere = \false)
    {
    }
    /**
     * Generate country dropdwon
     *
     * @param array  $options
     * @param string $selected
     * @param bool   $everywhere
     */
    function dokan_state_dropdown($options, $selected = '', $everywhere = \false)
    {
    }
    /**
     * Shupping Processing time dropdown options
     *
     * @return array
     */
    function dokan_get_shipping_processing_times()
    {
    }
    /**
     * Get a single processing time string
     *
     * @param string $index
     *
     * @return string
     */
    function dokan_get_processing_time_value($index)
    {
    }
    /**
     * Send email to seller and admin when there is no product in stock or low stock
     *
     * @since 2.8.0
     *
     * @param string $recipient recipients email
     * @param WC_Product $product
     *
     * @return string recipient emails
     */
    function dokan_wc_email_recipient_add_seller_no_stock($recipient, $product)
    {
    }
    /**
     * Get all the months of products of a vendor.
     *
     * @since DOKAN_LITE
     *
     * @param int $user_id
     *
     * @return object
     */
    function dokan_get_products_listing_months_for_vendor($user_id)
    {
    }
    /**
     * Display a monthly dropdown for filtering product listing on seller dashboard
     *
     * @since 2.1
     *
     * @param int $user_id
     */
    function dokan_product_listing_filter_months_dropdown($user_id)
    {
    }
    /**
     * Display form for filtering product listing on seller dashboard
     *
     * @since 2.1
     */
    function dokan_product_listing_filter()
    {
    }
    /**
     * Search by SKU or ID for seller dashboard product listings.
     *
     * @param string $where
     *
     * @return string
     */
    function dokan_product_search_by_sku($where)
    {
    }
    /**
     * Dokan Social Profile fields
     *
     * @since 2.2
     *
     * @return array
     */
    function dokan_get_social_profile_fields()
    {
    }
    /**
     * Generate Address fields form for seller
     *
     * @since 2.3
     *
     * @param bool verified
     *
     * @return void
     */
    function dokan_seller_address_fields($verified = \false, $required = \false)
    {
    }
    /**
     * Generate Address string | array for given seller id or current user
     *
     * @since 2.3
     *
     * @param int $seller_id, defaults to current_user_id
     * @param bool $get_array, if true returns array instead of string
     *
     * @return string|array Address | array Address
     */
    function dokan_get_seller_address($seller_id = 0, $get_array = \false)
    {
    }
    /**
     * Dokan get seller short formatted address
     *
     * @since  2.5.7
     *
     * @param int  $store_id
     * @param bool $line_break
     *
     * @return string
     */
    function dokan_get_seller_short_address($store_id, $line_break = \true)
    {
    }
    /**
     * Get terms and conditions page
     *
     * @since 2.3
     *
     * @param int $store_id
     *
     * @return string
     */
    function dokan_get_toc_url($store_id)
    {
    }
    /**
     * Login Redirect
     *
     * @since 2.4
     *
     * @param string  $redirect_to [url]
     * @param WP_User $user
     *
     * @return string [url]
     */
    function dokan_after_login_redirect($redirect_to, $user)
    {
    }
    /**
     * Check if the post belongs to the given user
     *
     * @param int $post_id
     * @param int $user_id
     *
     * @return bool
     */
    function dokan_is_valid_owner($post_id, $user_id)
    {
    }
    function dokan_set_is_home_false_on_store()
    {
    }
    /**
     * Register dokan store widget
     *
     * @return void
     */
    function dokan_register_store_widget()
    {
    }
    /**
     * Calculate category wise commission for given product
     *
     * @since 2.6.8
     *
     * @param int $product_id
     *
     * @return int $commission_rate
     */
    function dokan_get_category_wise_seller_commission($product_id, $category_id = 0)
    {
    }
    /**
     * Calculate category wise commission type for given product
     *
     * @since 2.6.9
     *
     * @param int $product_id
     *
     * @return int $commission_rate
     */
    function dokan_get_category_wise_seller_commission_type($product_id, $category_id = 0)
    {
    }
    /**
     * Get seller earning for a given product
     *
     * @since 2.6.9
     *
     * @param int $product_id
     * @param int $seller_id
     *
     * @deprecated 2.9.11
     *
     * @return float $earning | zero on failure or no price
     */
    function dokan_get_earning_by_product($product_id, $seller_id)
    {
    }
    /**
     * Delete user's details when the user is deleted
     *
     * @since 2.6.9
     *
     * @param int $user_id , int $reassign
     *
     * @return void
     */
    function dokan_delete_user_details($user_id, $reassign)
    {
    }
    /**
     * Get a vendor
     *
     * @since 2.6.10
     *
     * @param int $vendor_id
     *
     * @return \Dokan_Vendor
     */
    function dokan_get_vendor($vendor_id = \null)
    {
    }
    /**
     * Get all cap related to seller
     *
     * @since 2.7.3
     *
     * @return array
     */
    function dokan_get_all_caps()
    {
    }
    /**
     * Get translated capability
     *
     * @since 3.0.2
     *
     * @param string $cap
     *
     * @return string
     */
    function dokan_get_all_cap_labels($cap)
    {
    }
    /**
     * Merge user defined arguments into defaults array.
     *
     * This function is similiar to WordPress wp_parse_args().
     * It's support multidimensional array.
     *
     * @param array $args
     * @param array $defaults optional
     *
     * @return array
     */
    function dokan_parse_args(&$args, $defaults = [])
    {
    }
    function dokan_get_translations_for_plugin_domain($domain, $language_dir = \null)
    {
    }
    /**
     * Returns Jed-formatted localization data.
     *
     * @param string $domain translation domain
     *
     * @return array
     */
    function dokan_get_jed_locale_data($domain, $language_dir = \null)
    {
    }
    /**
     * Dokan get translated days
     *
     * @since  2.8.2
     *
     * @param string|null $days
     * @maram string/null $form
     *
     * @return string|array
     */
    function dokan_get_translated_days($day = '', $form = 'long')
    {
    }
    /**
     * Collect store times here.
     *
     * @since 3.3.7
     *
     * @param string   $day
     * @param string   $return_type eg: opening_time or closing_time
     * @param int      $index
     * @param int|null $store_id
     *
     * @return mixed|string
     */
    function dokan_get_store_times($day, $return_type, $index = \null, $store_id = \null)
    {
    }
    /**
     * Dokan is store open
     *
     * @since  2.8.2
     * @since  3.2.1 replaced time related functions with dokan_current_datetime()
     *
     * @param int $user_id
     *
     * @return bool
     */
    function dokan_is_store_open($user_id)
    {
    }
    /**
     * Dokan get pro buy now url
     *
     * @since 2.8.5
     *
     * @return string [url]
     */
    function dokan_pro_buynow_url()
    {
    }
    /**
     * Remove hook for anonymous class
     *
     * @param string $hook_name
     * @param string $class_name
     * @param string $method_name
     * @param int    $priority
     *
     * @return bool
     */
    function dokan_remove_hook_for_anonymous_class($hook_name = '', $class_name = '', $method_name = '', $priority = 0)
    {
    }
    /**
     * Dokan get variable product earnings
     *
     * @param int  $product_id
     * @param bool $formated
     * @param bool $deprecated
     *
     * @return float|string
     */
    function dokan_get_variable_product_earning($product_id, $formated = \true, $deprecated = \false)
    {
    }
    /**
     * Get page permalink of dokan pages by page id
     *
     * @since 2.9.10
     *
     * @param string $page_id
     *
     * @return string
     */
    function dokan_get_permalink($page_id)
    {
    }
    /**
     * Check if it's store listing page
     *
     * @since 2.9.10
     *
     * @return bool
     */
    function dokan_is_store_listing()
    {
    }
    /**
     * Dokan generate username
     *
     * @param string $name
     *
     * @return string
     */
    function dokan_generate_username($name = 'store')
    {
    }
    /**
     * Replaces placeholders with links to policy pages.
     *
     * @since 2.9.10
     *
     * @param string $text text to find/replace within
     *
     * @return string
     */
    function dokan_replace_policy_page_link_placeholders($text)
    {
    }
    /**
     * Dokan privacy policy text
     *
     * @since 2.9.10
     * @since DOKAN_LITE_VERSION Add `$return` param to return the text on demand instead of printing
     *
     * @param bool $return
     *
     * @return string
     */
    function dokan_privacy_policy_text($return = \false)
    {
    }
    /**
     * Dokan commission types
     *
     * @since 2.9.21
     *
     * @return array
     */
    function dokan_commission_types()
    {
    }
    /**
     * Dokan Login Form
     *
     * @since 2.9.11
     *
     * @param array $args
     * @param bool  $echo
     *
     * @return void|string
     */
    function dokan_login_form($args = [], $echo = \false)
    {
    }
    /**
     * Validate a boolean variable
     *
     * @since 2.9.12
     *
     * @param mixed $var
     *
     * @return bool
     */
    function dokan_validate_boolean($var)
    {
    }
    /**
     * Backward compatibile settings option map
     *
     * @since 2.9.21
     *
     * @param string $option
     * @param string $section
     *
     * @return array
     */
    function dokan_admin_settings_rearrange_map($option, $section)
    {
    }
    /**
     * Dokan get terms and condition page url
     *
     * @since 2.9.16
     *
     * @return string | null on failure
     */
    function dokan_get_terms_condition_url()
    {
    }
    /**
     * Get Seller status counts, used in admin area
     *
     * @since 2.9.23
     *
     * @return array
     */
    function dokan_get_seller_status_count()
    {
    }
    /**
     * Install a plugin from wp.org
     *
     * Example:
     * To download WooCommerce `dokan_install_wp_org_plugin( 'woocommerce' )`
     * To download plugin like dokan-lite that has different slug and main plugin file,
     * `dokan_install_wp_org_plugin( 'dokan-lite', 'dokan.php' )`
     *
     * @since 2.9.27
     *
     * @param string $plugin_slug
     * @param string $main_file
     *
     * @return bool|\WP_Error
     */
    function dokan_install_wp_org_plugin($plugin_slug, $main_file = \null)
    {
    }
    /**
     * Redirect to Dokan admin setup wizard page
     *
     * @since 2.9.27
     *
     * @return void
     */
    function dokan_redirect_to_admin_setup_wizard()
    {
    }
    /**
     * Dokan generate star ratings
     *
     * @since  3.0.0
     *
     * @param int $rating Number of rating point
     * @param int $starts Total number of stars
     *
     * @return string
     */
    function dokan_generate_ratings($rating, $stars)
    {
    }
    /**
     * Check if current PHP version met the minimum requried PHP version for WooCommerce
     *
     * @since 3.0.0
     *
     * @param string $required_version
     *
     * @return bool
     */
    function dokan_met_minimum_php_version_for_wc($required_version = '7.0')
    {
    }
    /**
     * Checks if Dokan settings has map api key
     *
     * @since 3.0.2
     *
     * @return bool
     */
    function dokan_has_map_api_key()
    {
    }
    /**
     * Dokan clear product caches.
     * We'll be calling `WC_Product_Data_Store_CPT::clear_caches()` to clear product caches.
     *
     * @since 3.0.3
     *
     * @param int|\WC_Product $product
     *
     * @return void
     */
    function dokan_clear_product_caches($product)
    {
    }
    /**
     * Check which vendor info should be hidden
     *
     * @since DOKAN_LITE_SINCE
     *
     * @param string $option
     *
     * @return bool|array if no param is passed
     */
    function dokan_is_vendor_info_hidden($option = \null)
    {
    }
    /**
     * Function current_datetime() compatibility for wp version < 5.3
     *
     * @since 3.1.1
     *
     * @return DateTimeImmutable
     */
    function dokan_current_datetime()
    {
    }
    /**
     * Function wp_timezone() compatibility for wp version < 5.3
     *
     * @since 3.1.1
     *
     * @return DateTimeZone
     */
    function dokan_wp_timezone()
    {
    }
    /**
     * Function wp_timezone_string() compatibility for wp version < 5.3
     *
     * @since 3.1.1
     *
     * @return string
     */
    function dokan_wp_timezone_string()
    {
    }
    /**
     * Get a formatted date, time from WordPress format
     *
     * @since 3.2.7
     *
     * @param string|bool                  $format date format string or false for default WordPress date
     * @param string|int|DateTimeImmutable $date   the date string or timestamp or DateTimeImmutable object
     *
     * @return string|false The date, translated if locale specifies it. False on invalid timestamp input.
     */
    function dokan_format_datetime($date = '', $format = \false)
    {
    }
    /**
     * Get a formatted date from WordPress format
     *
     * @since 3.1.1
     *
     * @param string|int|DateTimeImmutable $date   the date string or timestamp or DateTimeImmutable object
     * @param string|bool                  $format date format string or false for default WordPress date
     *
     * @return string|false The date, translated if locale specifies it. False on invalid timestamp input.
     */
    function dokan_format_date($date = '', $format = \false)
    {
    }
    /**
     * Get a formatted time from WordPress format
     *
     * @since 3.5.1
     *
     * @param string|int|DateTimeImmutable $date   the date string or timestamp or DateTimeImmutable object
     * @param string|bool                  $format date format string or false for default WordPress date
     *
     * @return string|false The date, translated if locale specifies it. False on invalid timestamp input.
     */
    function dokan_format_time($date = '', $format = \false)
    {
    }
    /**
     * Create an expected date time format from a given format.
     *
     * @since 3.7.1
     *
     * @param string $format      Date string format
     * @param string $date_string Date time string
     *
     * @return DateTimeImmutable|false
     */
    function dokan_create_date_from_format($format, $date_string)
    {
    }
    /**
     * Convert times in expected format.
     *
     * @param array|string $times_data    Times data
     * @param string       $input_format  Times current format
     * @param string       $output_format Times converted format
     *
     * @return string|array
     */
    function dokan_convert_date_format($times_data, $input_format = 'g:i a', $output_format = 'g:i a')
    {
    }
    /**
     * This method will convert datetime string into timestamp
     *
     * @since 3.2.15
     *
     * @param string $date_string
     * @param bool   $gmt_date
     *
     * @return bool|int date timestamp on success, false otherwise
     */
    function dokan_get_timestamp($date_string, $gmt_date = \false)
    {
    }
    /**
     * Get inverval between two dates, useful for chart functions
     *
     * @since 3.7.0
     *
     * @param string|int $start_date
     * @param string|int $end_date
     * @param string     $group_by
     *
     * @return false|int
     */
    function dokan_get_interval_between_dates($start_date, $end_date, $group_by = 'day')
    {
    }
    /**
     * Format date time string to WC format
     *
     * @since 2.6.8
     * @since 3.7.0 This method was moved from wc-functions.php
     *
     * @param string  $time
     * @param boolean $date_only
     *
     * @deprecated 3.8.0
     *
     * @return string
     */
    function dokan_date_time_format($time, $date_only = \false)
    {
    }
    /**
     * Get threshold day for a user
     *
     * @since DOKAN_LITE_SINCE
     *
     * @param int $user_id
     *
     * @return int threshold day
     */
    function dokan_get_withdraw_threshold($user_id)
    {
    }
    /**
     * Mask or hide part of email address.
     *
     * @since 3.3.1
     *
     * @param string $email Email address
     *
     * @return string
     */
    function dokan_mask_email_address($email)
    {
    }
    /**
     * Mask or hide part of string.
     *
     * @since 3.7.22
     *
     * @param string  $text text
     * @param integer $position
     *
     * @return string
     */
    function dokan_mask_string($text, $position = 1, $show_max_letters = 4)
    {
    }
    /**
     * Add item in specific position of an array
     *
     * @since 2.9.21
     *
     * @param array      $array
     * @param int|string $position <index position or name of the key after which you want to add the new array>
     * @param array      $new_array
     *
     * @return array
     */
    function dokan_array_after($array, $position, $new_array)
    {
    }
    /**
     * Insert a value or key/value pair (assoc array) after a specific key in an array.  If key doesn't exist, value is appended
     * to the end of the array.
     *
     * @since 3.2.16
     *
     * @param array  $old_array
     * @param array  $new_array
     * @param string $insert_after_key
     *
     * @return array
     */
    function dokan_array_insert_after(array $old_array, array $new_array, $insert_after_key = '')
    {
    }
    /**
     * Check a order have apply admin coupon
     *
     * @since 3.2.16
     *
     * @param WC_Order $order
     * @param int      $vendor_id
     * @param int      $product_id
     *
     * @return bool
     */
    function dokan_is_admin_coupon_applied($order, $vendor_id, $product_id = 0)
    {
    }
    /**
     * Get vendor store banner width
     *
     * Added new filter hook for vendor store
     * banner width size @hook dokan_store_banner_default_width
     *
     * @since 3.2.15
     *
     * @return int $width Banner width
     */
    function dokan_get_vendor_store_banner_width()
    {
    }
    /**
     * Get vendor store banner height
     *
     * Added new filter hook for vendor
     * store banner height size @hook dokan_store_banner_default_height
     *
     * @since 3.2.15
     *
     * @return int $height Banner height
     */
    function dokan_get_vendor_store_banner_height()
    {
    }
    /**
     * Get google recaptcha site key and secret key
     *
     * @since 3.3.3
     *
     * @param bool $boolean
     *
     * @return array|bool
     */
    function dokan_get_recaptcha_site_and_secret_keys($boolean = \false)
    {
    }
    /**
     * Handle google reCaptcha validation request.
     *
     * @since 3.3.6
     *
     * @param string $action
     * @param string $token
     * @param string $secretkey
     *
     * @return boolean
     */
    function dokan_handle_recaptcha_validation($action, $token, $secretkey)
    {
    }
    /**
     * Get additional products sections.
     *
     * @since 3.3.6
     *
     * @return array
     */
    function dokan_get_additional_product_sections()
    {
    }
    /**
     * Converts a 'on' or 'off' to boolean
     *
     * @since 3.3.6
     *
     * @param string $value
     *
     * @return bool
     */
    function dokan_string_to_bool($value)
    {
    }
    /**
     * Converts a boolean value to a 'on' or 'off'.
     *
     * @since 3.3.7
     *
     * @param bool $bool
     *
     * @return string
     */
    function dokan_bool_to_on_off($bool)
    {
    }
    /**
     * Check is 12-hour format in current setup.
     *
     * @since DOKAN_PRO_SINCE
     *
     * @return bool
     */
    function is_tweleve_hour_format()
    {
    }
    /**
     * Sanitize phone number.
     * Allows only numbers and "+" (plus sign) "." (full stop) "(" ")" "-".
     *
     * @since 3.7.0
     *
     * @param string $phone Phone number.
     *
     * @return string
     */
    function dokan_sanitize_phone_number($phone)
    {
    }
    /**
     * Dokan override author ID from admin
     *
     * @since  2.6.2
     * @since 3.7.18 moved this method from includes/Admin/functions.php file
     *
     * @param  WC_Product $product
     * @param  integer $seller_id
     *
     * @return void
     */
    function dokan_override_product_author($product, $seller_id)
    {
    }
    /**
     * Overrides author for products with variations.
     *
     * @since 3.7.4
     * @since 3.7.18 moved this method from includes/Admin/functions.php file
     *
     * @param WC_Product $product
     * @param int        $seller_id
     *
     * @return void
     */
    function dokan_override_author_for_product_variations($product, $seller_id)
    {
    }
    function dokan_user_update_to_seller($user, $data)
    {
    }
    /**
     * Get new product creation URL.
     *
     * @since 3.9.7
     *
     * @return false|string
     */
    function dokan_get_new_product_url()
    {
    }
    /**
     * Generate SQL query and fetch the report data based on the arguments passed
     *
     * This function was cloned from WC_Admin_Report class.
     *
     * @since 1.0
     *
     * @global WPDB $wpdb
     * @global WP_User $current_user
     * @param array $args
     * @param string $start_date
     * @param string $end_date
     * @return obj
     */
    function dokan_get_order_report_data($args, $start_date, $end_date)
    {
    }
    /**
     * Generate seller dashboard overview chart
     *
     * @since 1.0
     * @return void
     */
    function dokan_dashboard_sales_overview()
    {
    }
    /**
     * Prepares chart data for sales overview
     *
     * @since 1.0
     *
     * @param string $start_date
     * @param string $end_date
     * @param string $group_by
     *
     * @return void
     */
    function dokan_sales_overview_chart_data($start_date, $end_date, $group_by)
    {
    }
    /**
     * Checks if the theme sidebar is enabled on store page
     *
     * @since DOKAN_LITE_SINCE
     *
     * @return bool
     */
    function dokan_store_theme_sidebar_enabled()
    {
    }
    /**
     * Display navigation to next/previous pages when applicable
     */
    function dokan_content_nav($nav_id, $query = \null)
    {
    }
    function dokan_page_navi($before, $after, $wp_query)
    {
    }
    function dokan_product_dashboard_errors()
    {
    }
    function dokan_product_listing_status_filter()
    {
    }
    function dokan_order_listing_status_filter()
    {
    }
    /**
     * Store category menu for a store
     *
     * @param  int $seller_id
     *
     * @since 3.2.11 rewritten whole function
     *
     * @return void
     */
    function dokan_store_category_menu($seller_id, $title = '')
    {
    }
    /**
     * Store category menu for a store
     *
     * @since 3.5.0
     *
     * @param int    $seller_id
     * @param array  $taxonomy
     * @param string $query_type
     *
     * @return void
     */
    function dokan_store_term_menu_list($seller_id, $taxonomy, $query_type)
    {
    }
    /**
     * Return the currently viewed term slug.
     *
     * @return int
     */
    function dokan_get_current_term_slug()
    {
    }
    /**
     * Get chosen taxonomy attributes.
     *
     * @since 3.5.0
     *
     * @return array
     */
    function dokan_get_chosen_taxonomy_attributes()
    {
    }
    function dokan_seller_reg_form_fields()
    {
    }
    function dokan_seller_not_enabled_notice()
    {
    }
    /**
     * User top navigation menu
     *
     * @return void
     */
    function dokan_header_user_menu()
    {
    }
    /**
     * Redirect My order in Login page without user logged login
     *
     * @since 2.4
     *
     * @return [redirect]
     */
    function dokan_myorder_login_check()
    {
    }
    /**
     * Store sidebar widget args
     *
     * @return array
     */
    function dokan_store_sidebar_args()
    {
    }
    /**
     * Store single category widget
     *
     * @return void
     */
    function dokan_store_category_widget()
    {
    }
    /**
     * Store single location widget
     *
     * @return void
     */
    function dokan_store_location_widget()
    {
    }
    /**
     * Store opening/closing time widget
     *
     * @return void
     */
    function dokan_store_time_widget()
    {
    }
    /**
     * Store contact form widget
     *
     * @return void
     */
    function dokan_store_contact_widget()
    {
    }
    /**
     * Get seller registration form default role
     *
     * @since 3.10.3
     *
     * @return string values can be 'customer' or 'seller'
     */
    function dokan_get_seller_registration_default_role() : string
    {
    }
    /**
     * Get Dokan seller registration form data
     *
     * @since 3.7.0
     *
     * @return string[]
     */
    function dokan_get_seller_registration_form_data()
    {
    }
    /**
     * Save the product data meta box.
     *
     * @access public
     *
     * @param int   $post_id
     * @param array $data
     *
     * @throws WC_Data_Exception
     * @return void
     */
    function dokan_process_product_meta(int $post_id, array $data = [])
    {
    }
    /**
     * Grant downloadable file access to any newly added files on any existing.
     * orders for this product that have previously been granted downloadable file access.
     *
     * @param int   $product_id         product identifier
     * @param int   $variation_id       optional product variation identifier
     * @param array $downloadable_files newly set files
     *
     * @deprecated 3.8.0
     *
     * @return void
     */
    function dokan_process_product_file_download_paths(int $product_id, int $variation_id, array $downloadable_files)
    {
    }
    /**
     * Get discount coupon total from an order
     *
     * @param int $order_id
     *
     * @deprecated 3.8.0
     *
     * @return int
     */
    function dokan_sub_order_get_total_coupon(int $order_id) : int
    {
    }
    /**
     * Change seller display name to store name
     *
     * @since 2.4.10 [Change seller display name to store name]
     *
     * @param string $display_name
     *
     * @return string $display_name
     */
    function dokan_seller_displayname($display_name)
    {
    }
    /**
     * Get featured products
     *
     * Shown on homepage
     *
     * @param int $per_page
     *
     * @return WP_Query
     */
    function dokan_get_featured_products($per_page = 9, $seller_id = '', $page = 1)
    {
    }
    /**
     * Get the latest products
     *
     * Shown on homepage
     *
     * @param int $per_page
     *
     * @return WP_Query
     */
    function dokan_get_latest_products($per_page = 9, $seller_id = '', $page = 1)
    {
    }
    /**
     * Get best-selling products
     *
     * Shown on homepage
     *
     * @param int $per_page
     *
     * @return WP_Query
     */
    function dokan_get_best_selling_products($per_page = 8, $seller_id = '', $page = 1, $hide_outofstock = \false)
    {
    }
    /**
     * Check More product from Seller tab is active or not.
     *
     * @since 2.5
     *
     * @return boolean
     */
    function check_more_seller_product_tab()
    {
    }
    /**
     * Check if Vendor Info tab enabled in single product page.
     *
     * @since 3.9.0
     *
     * @return boolean
     */
    function is_enabled_vendor_info_product_tab()
    {
    }
    /**
     * Get top-rated products
     *
     * Shown on homepage
     *
     * @param int $per_page
     *
     * @return WP_Query
     */
    function dokan_get_top_rated_products($per_page = 8, $seller_id = '', $page = 1)
    {
    }
    /**
     * Get products on-sale
     *
     * Shown on homepage
     *
     * @param int $per_page
     * @param int $paged
     * @param int $seller_id
     *
     * @return WP_Query
     */
    function dokan_get_on_sale_products(int $per_page = 10, int $paged = 1, int $seller_id = 0) : \WP_Query
    {
    }
    /**
     * Get current balance of a seller
     *
     * Total = SUM(net_amount) - SUM(withdraw)
     *
     * @param int  $seller_id
     * @param bool $formatted
     *
     * @return float|string float if formatted is false, string otherwise
     */
    function dokan_get_seller_balance($seller_id, $formatted = \true)
    {
    }
    /**
     * Get Seller Earned amount
     *
     * @since 2.5.4
     *
     * @param boolean $formatted
     * @param string  $on_date
     *
     * @param int     $seller_id
     *
     * @return float|null
     */
    function dokan_get_seller_earnings($seller_id, $formatted = \true, $on_date = '')
    {
    }
    /**
     * Get seller rating
     *
     * @param int $seller_id
     *
     * @return array
     */
    function dokan_get_seller_rating($seller_id)
    {
    }
    /**
     * Get seller rating in a readable rating format
     *
     * @param int $seller_id
     *
     * @return string
     */
    function dokan_get_readable_seller_rating($seller_id)
    {
    }
    /**
     * Woocommerce Admin dashboard Sales Report Synced with Dokan Dashboard report
     *
     * @since  2.4.3
     *
     * @param array $query
     *
     * @return array
     */
    function dokan_filter_woocommerce_dashboard_status_widget_sales_query($query)
    {
    }
    /**
     * Handle password edit and name update functions
     *
     * @since 2.4.10
     *
     * @return void
     */
    function dokan_save_account_details()
    {
    }
    /**
     * Remove banner when without banner layout selected for profile
     *
     * @param array $progress_values
     *
     * @return array
     */
    function dokan_split_profile_completion_value($progress_values)
    {
    }
    /**
     * Set More products from seller tab on Single Product Page
     *
     * @since 2.5
     *
     * @param array $tabs
     *
     * @return array
     */
    function dokan_set_more_from_seller_tab($tabs)
    {
    }
    /**
     * Show more products from current seller
     *
     * @since 2.5
     * @since DOKAN_LITE_SINCE added filter 'dokan_get_more_products_per_page'
     *
     * @param int|string $seller_id
     * @param int|string $posts_per_page
     *
     * @return void
     */
    function dokan_get_more_products_from_seller($seller_id = 0, $posts_per_page = 6)
    {
    }
    /**
     * Keep old vendor after duplicate any product
     *
     * @param WC_Product $duplicate
     * @param WC_Product $product
     *
     * @return void
     */
    function dokan_keep_old_vendor_woocommerce_duplicate_product($duplicate, $product)
    {
    }
    /**
     * @since 3.7.24
     *
     * @param boolean $is_purchasable
     * @param object $product
     *
     * @return boolean
     */
    function dokan_vendor_own_product_purchase_restriction(bool $is_purchasable, $product) : bool
    {
    }
    /**
     * Restricts vendor from reviewing own product
     *
     * @since 3.7.24
     *
     * @param array $data
     * @return array
     */
    function dokan_vendor_product_review_restriction(array $data) : array
    {
    }
    /**
     * Monitors a new order and attempts to create sub-orders
     *
     * If an order contains products from multiple vendor, we can't show the order
     * to each seller dashboard. That's why we need to divide the main order to
     * some sub-orders based on the number of sellers.
     *
     * @param int $parent_order_id
     *
     * @deprecated 3.8.0
     *
     * @return void
     */
    function dokan_create_sub_order($parent_order_id)
    {
    }
    /**
     * Creates a sub order
     *
     * @param int   $parent_order
     * @param int   $seller_id
     * @param array $seller_products
     *
     * @deprecated 3.8.0
     *
     * @return void
     */
    function dokan_create_seller_order($parent_order, $seller_id, $seller_products)
    {
    }
    /**
     * Create coupons for a sub-order if neccessary
     *
     * @param WC_Order $parent_order
     * @param int      $order_id
     * @param array    $product_ids
     *
     * @return void
     */
    function dokan_create_sub_order_coupon($parent_order, $order_id, $product_ids)
    {
    }
    /**
     * Create shipping for a sub-order if neccessary
     *
     * @param WC_Order $parent_order
     * @param int      $order_id
     * @param array    $seller_products
     *
     * @throws Exception
     *
     * @return mixed
     */
    function dokan_create_sub_order_shipping($parent_order, $order_id, $seller_products)
    {
    }
    /**
     * Injects seller name on cart and other areas
     *
     * @param array $item_data
     * @param array $cart_item
     *
     * @return array
     */
    function dokan_product_seller_info($item_data, $cart_item)
    {
    }
    /**
     * Adds a seller tab in product single page
     *
     * @param array $tabs
     *
     * @return array
     */
    function dokan_seller_product_tab($tabs)
    {
    }
    /**
     * Prints seller info in product single page
     *
     * @global WC_Product $product
     * @param type $val
     */
    function dokan_product_seller_tab($val)
    {
    }
    /**
     * Show sub-orders on a parent order if available
     *
     * @param WC_Order $parent_order
     * @return void
     */
    function dokan_order_show_suborders($parent_order)
    {
    }
    /**
     * Default seller image
     *
     * @return string
     */
    function dokan_get_no_seller_image()
    {
    }
    /**
     * Override Customer Orders array
     *
     * @param post_arg_query array()
     *
     * @return array() post_arg_query
     */
    function dokan_get_customer_main_order($customer_orders)
    {
    }
    /**
     * Add edit post capability to woocommerce proudct post type
     *
     * @since 2.6.9
     *
     * @param capability array
     *
     * @return capability array
     */
    function dokan_manage_capability_for_woocommerce_product($capability)
    {
    }
    /**
     * Author field for product quick edit
     *
     * @return void
     */
    function dokan_author_field_quick_edit()
    {
    }
    /**
     * Assign value for quick edit data
     *
     * @param array $column
     * @param integer $post_id
     *
     * @return void
     */
    function dokan_vendor_quick_edit_data($column, $post_id)
    {
    }
    /**
     * Save quick edit data
     *
     * @param WC_Product $product
     *
     * @return void
     */
    function dokan_save_quick_edit_vendor_data($product)
    {
    }
    /**
     * Add go to vendor dashboard button to my account page
     *
     * @since 2.8.2
     *
     * @return string
     */
    function dokan_set_go_to_vendor_dashboard_btn()
    {
    }
    /**
     * Attach vendor name into order details
     *
     * @param  int item_id
     *
     * @param  object order
     *
     * @since 2.8.3
     *
     * @return void
     */
    function dokan_attach_vendor_name($item_id, $order)
    {
    }
    /**
     * Enable yoast seo breadcrums in dokan store page
     *
     * @param  array $crumbs
     *
     * @return array
     */
    function enable_yoast_breadcrumb($crumbs)
    {
    }
    /**
     * Dokan add privacy policy
     *
     * @return string
     */
    function dokan_add_privacy_policy()
    {
    }
    /**
     * @param string $fileIdentifier
     * @param string $file
     * @return void
     */
    function composerRequire1e669f7f5259d0a69bc52936935bb40c($fileIdentifier, $file)
    {
    }
    /**
     * Build a URL.
     *
     * The parts of the second URL will be merged into the first according to
     * the flags argument.
     *
     * @param mixed $url     (part(s) of) an URL in form of a string or
     *                       associative array like parse_url() returns
     * @param mixed $parts   same as the first argument
     * @param int   $flags   a bitmask of binary or'ed HTTP_URL constants;
     *                       HTTP_URL_REPLACE is the default
     * @param array $new_url if set, it will be filled with the parts of the
     *                       composed url like parse_url() would return
     * @return string
     */
    function http_build_url($url, $parts = array(), $flags = \HTTP_URL_REPLACE, &$new_url = array())
    {
    }
}