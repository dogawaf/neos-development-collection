Ext.ns('TYPO3.TYPO3.Components');

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License as published by the Free   *
 * Software Foundation, either version 3 of the License, or (at your      *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        *
 * You should have received a copy of the GNU General Public License      *
 * along with the script.                                                 *
 * If not, see http://www.gnu.org/licenses/gpl.html                       *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * @class TYPO3.TYPO3.Components.DummyImage
 *
 * A dummy image
 *
 * @namespace TYPO3.TYPO3.Module.UserInterface
 * @extends Ext.BoxComponent
 */
TYPO3.TYPO3.Components.DummyImage = Ext.extend(Ext.BoxComponent, {
	backgroundImage: null,

	initComponent: function() {
		var config = {
			autoEl: {
				tag: 'img',
				src: this.backgroundImage,
				width: 100
			}
		};
		Ext.apply(this, config);
		TYPO3.TYPO3.Components.DummyImage.superclass.initComponent.call(this);
	}
});
Ext.reg('TYPO3.TYPO3.Components.DummyImage', TYPO3.TYPO3.Components.DummyImage);