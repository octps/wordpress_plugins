<?php
// Plugin Name: update-without-using-ftp
// Description: Update without using ftp. Please stop this plugin when WordPress update is done.
// Version: 1.0
// Author: Takayoshi Kitajima
// Author URI: http://screenof.blue
// License: GPL2
// License URI: https://www.gnu.org/licenses/gpl-2.0.html


// Copyright (C) 2017 Takayoshi Kitajima(renmo9@gmail.com)

// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
if (!defined('ABSPATH')) {
 exit;	
}

function set_fs_method($args) {
	return 'direct';
}
add_filter('filesystem_method','set_fs_method');
