import './list.scss';
import attachIcon from '../../utils/helper';
import domReady from '@wordpress/dom-ready';
const coreBlock = 'core/list';
const name = 'list';

domReady(() => {
	attachIcon(coreBlock, name);
});
