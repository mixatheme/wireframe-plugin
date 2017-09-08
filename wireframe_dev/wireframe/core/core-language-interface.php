<?php
/**
 * Core_Language_Interface is a Wireframe class.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Plugin
 * @author    MixaTheme, Tada Burke
 * @version   0.1.0 Wireframe
 * @copyright 2016 MixaTheme
 * @license   GPL-2.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/Wireframe
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this software. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Namespaces.
 *
 * @since 5.3.0 PHP
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
namespace MixaTheme\Wireframe\Plugin;
use WP_Error;

/**
 * No direct access to this file.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Theme
 * @since 0.1.0 Wireframe_Plugin
 */
defined( 'ABSPATH' ) or die();

/**
 * Check if the class exists.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Core_Language_Interface' ) ) :
	/**
	 * Core_Language_Interface core Wireframe class for i18n & l10n translation.
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Theme
	 * @since 0.1.0 Wireframe_Plugin
	 * @see   https://github.com/mixatheme/Wireframe
	 * @todo  There's zero reason for this to be a class.
	 */
	interface Core_Language_Interface {
		/**
		 * The component type.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Theme
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function get_component();

		/**
		 * Path to language file.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Theme
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function get_path();

		/**
		 * The $plugin_rel_path parameter instead.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Theme
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function get_deprecated();

		/**
		 * Load plugin textdomain.
		 *
		 * @since  1.5.0 WordPress
		 * @since  0.1.0 Wireframe
		 * @since  0.1.0 Wireframe_Theme
		 * @since  0.1.0 Wireframe_Plugin
		 */
		public function textdomain();

	} // Core_Language_Interface.

endif; // Thanks for using MixaTheme products!
