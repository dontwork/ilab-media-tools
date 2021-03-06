<?php
// Copyright (c) 2016 Interfacelab LLC. All rights reserved.
//
// Released under the GPLv3 license
// http://www.gnu.org/licenses/gpl-3.0.html
//
// Uses code from:
// Persist Admin Notices Dismissal
// by Agbonghama Collins and Andy Fragen
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

namespace MediaCloud\Plugin\Utilities\Blade;

use MediaCloud\Vendor\duncan3dc\Laravel\BladeInstance;
use MediaCloud\Vendor\Illuminate\View\Compilers\BladeCompiler;
use MediaCloud\Vendor\Illuminate\View\FileViewFinder;

/**
 * Class BladeWrapper
 * @package MediaCloud\Plugin\Utilities\Blade
 *
 * @property-read FileViewFinder $viewFinder
 * @property-read BladeCompiler $compiler
 */
class BladeWrapper extends BladeInstance {
	public function __get($name) {
		if ($name == 'viewFinder') {
			return $this->getViewFinder();
		} else if ($name == 'compiler') {
			return $this->getViewFactory()->getEngineResolver()->resolve('blade')->getCompiler();
		}

		return null;
	}
}