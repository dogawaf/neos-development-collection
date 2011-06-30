Ext.ns('TYPO3.TYPO3.Module.Dashboard');

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
 * @class TYPO3.TYPO3.Module.Dashboard.DashboardView
 *
 * The dashboard main view with the portal component
 *
 * @namespace TYPO3.TYPO3.Module.Dashboard
 * @extends Ext.Container
 */
TYPO3.TYPO3.Module.Dashboard.DashboardView = Ext.extend(Ext.Panel, {

	/**
	 * Initializer
	 */
	initComponent: function() {
		var config = {
			border: false,
			layout: 'fit',
			items: [{
				itemId: 'fifty-fifty',
				xtype: 'portal',
				border: false,
				items: [{
					columnWidth: 0.5,
					style: 'padding: 10px',
					items: this._getColumnItems('left')
				}, {
					columnWidth: 0.5,
					style: 'padding: 10px',
					items: this._getColumnItems('right')
				}]
			}]
		};
		Ext.apply(this, config);
		TYPO3.TYPO3.Module.Dashboard.DashboardView.superclass.initComponent.call(this);
	},

	/**
	 * @private
	 * @return {Array} an array of portal items fetched from the registry.
	 */
	_getColumnItems: function(column) {
		var items = [];
		var config = TYPO3.TYPO3.Core.Registry.get('dashboard/column/' + column);
		Ext.each(config, function(component) {
			var item = {};
			Ext.apply(item, component);
			items.push(item);
		});
		return items;
	}

});
Ext.reg('TYPO3.TYPO3.Module.Dashboard.DashboardView', TYPO3.TYPO3.Module.Dashboard.DashboardView);
