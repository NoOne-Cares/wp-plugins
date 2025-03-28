import icons from '../../utils/icons';
import './separator.scss';
import { registerBlockStyle } from '@wordpress/blocks';
import domReady from '@wordpress/dom-ready';
import { __, sprintf } from '@wordpress/i18n';

domReady(() => {
	icons.forEach((icon) =>
		registerBlockStyle('core/separator', {
			name: `icon-${icon.value}`,
			label: sprintf(__('Icon: %s', 'theme-slug'), icon.icon),
		})
	);
});
