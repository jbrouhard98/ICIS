<?php

/* 
 * Copyright (C) 2014 jbrouhard
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

foreach (glob(dirname(dirname(__FILE__)) . "/includes/*.php") as $filename)
{
    include $filename;
}

$engine = new template;

$page = $engine -> buff_template('template');

$content = "<p>&nbsp;</p>
    <p><center><img src=../theme/default/images/vengeance.png /></center></p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus condimentum at erat non gravida. Praesent volutpat sapien et ultricies imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras dignissim lorem vel risus tristique, eu hendrerit libero congue. Suspendisse at tortor erat. Aliquam sollicitudin magna ac ante vestibulum facilisis. Donec cursus eros quis mauris elementum, quis varius tortor placerat. Nulla facilisis ligula non tincidunt blandit. Nullam diam ipsum, tristique id orci nec, cursus porttitor nulla. Nulla non ipsum arcu. In tincidunt aliquam risus, vel tincidunt augue placerat quis. Donec vel varius sapien.</p>
    <p>Donec ut aliquet sem. Fusce dictum sed nibh a pharetra. Suspendisse in malesuada augue. Ut eget semper diam, vitae aliquam turpis. Integer vel fringilla magna. Pellentesque interdum dolor magna, vel convallis est dignissim et. Pellentesque a gravida ligula. Donec faucibus quam eros, eu vulputate odio lobortis quis. Proin vulputate congue mi quis tincidunt. Nulla facilisi. Sed eget feugiat augue, id tincidunt neque. Suspendisse rutrum arcu in purus sagittis, eget iaculis erat porta.</p>
    <p>Maecenas sed egestas mauris. Sed sollicitudin dignissim arcu sed euismod. Integer congue euismod gravida. Aenean nec tellus augue. Aliquam fermentum elit ut dapibus viverra. Aliquam erat volutpat. Sed consectetur velit a augue sagittis, eget cursus nunc ullamcorper.</p>
    <p>Aliquam nec erat vulputate quam pharetra aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada nunc eget nunc euismod, id vulputate mauris elementum. Quisque sit amet tempor mauris. Phasellus at arcu feugiat, posuere neque sit amet, laoreet neque. Nunc ligula neque, sagittis vitae nibh ac, auctor gravida sem. Vivamus vel odio sapien. Curabitur eu est at ante mollis faucibus. Duis dapibus magna at nisi faucibus, eu pretium nibh venenatis. Donec congue sed leo eget tristique. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
    <p>Vestibulum a arcu in nisi mattis vulputate commodo eu lacus. Nulla sed luctus augue. Maecenas ac sem quam. Vivamus quis auctor mauris. Cras scelerisque ante quis consequat dapibus. In accumsan sit amet turpis sed egestas. In eget neque eu lorem fringilla tincidunt et eget velit. Aenean facilisis eu tellus vel fermentum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus condimentum at erat non gravida. Praesent volutpat sapien et ultricies imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras dignissim lorem vel risus tristique, eu hendrerit libero congue. Suspendisse at tortor erat. Aliquam sollicitudin magna ac ante vestibulum facilisis. Donec cursus eros quis mauris elementum, quis varius tortor placerat. Nulla facilisis ligula non tincidunt blandit. Nullam diam ipsum, tristique id orci nec, cursus porttitor nulla. Nulla non ipsum arcu. In tincidunt aliquam risus, vel tincidunt augue placerat quis. Donec vel varius sapien.</p>
    <p>Donec ut aliquet sem. Fusce dictum sed nibh a pharetra. Suspendisse in malesuada augue. Ut eget semper diam, vitae aliquam turpis. Integer vel fringilla magna. Pellentesque interdum dolor magna, vel convallis est dignissim et. Pellentesque a gravida ligula. Donec faucibus quam eros, eu vulputate odio lobortis quis. Proin vulputate congue mi quis tincidunt. Nulla facilisi. Sed eget feugiat augue, id tincidunt neque. Suspendisse rutrum arcu in purus sagittis, eget iaculis erat porta.</p>
    <p>Maecenas sed egestas mauris. Sed sollicitudin dignissim arcu sed euismod. Integer congue euismod gravida. Aenean nec tellus augue. Aliquam fermentum elit ut dapibus viverra. Aliquam erat volutpat. Sed consectetur velit a augue sagittis, eget cursus nunc ullamcorper.</p>
    <p>Aliquam nec erat vulputate quam pharetra aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada nunc eget nunc euismod, id vulputate mauris elementum. Quisque sit amet tempor mauris. Phasellus at arcu feugiat, posuere neque sit amet, laoreet neque. Nunc ligula neque, sagittis vitae nibh ac, auctor gravida sem. Vivamus vel odio sapien. Curabitur eu est at ante mollis faucibus. Duis dapibus magna at nisi faucibus, eu pretium nibh venenatis. Donec congue sed leo eget tristique. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
    <p>Vestibulum a arcu in nisi mattis vulputate commodo eu lacus. Nulla sed luctus augue. Maecenas ac sem quam. Vivamus quis auctor mauris. Cras scelerisque ante quis consequat dapibus. In accumsan sit amet turpis sed egestas. In eget neque eu lorem fringilla tincidunt et eget velit. Aenean facilisis eu tellus vel fermentum.</p>
";

$title = "USS Navras Membership Database";

$array = array('title' => $title,
				'nav' => $nav,
				'sidebar' => $sidebar,
				'info' => $info,
				'content' => $content);
				
echo $engine -> parse_variables($page, $array);
