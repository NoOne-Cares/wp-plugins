import icons from './icons';
import { registerBlockStyle } from '@wordpress/blocks';
import { __, sprintf } from '@wordpress/i18n';

const attachIcon = (coreBlock, name) => {
	console.log(coreBlock, name);
	icons.forEach((icon) => {
		registerBlockStyle(coreBlock, {
			name: `${name}-icon-${icon.value}`,
			label: sprintf(__('Icon: %s', 'theme-slug'), icon.icon),
		});
	});
};
export default attachIcon;
