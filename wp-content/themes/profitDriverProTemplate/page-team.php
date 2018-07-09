<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

global $wp;
global $error_message;

	get_header(); 
?>
<?php get_template_part( 'template-parts/core', 'header' ); ?>

<section id="team">
			<div class="masthead">
				<div class="text">
					<h5>OUR TEAM</h5>
					<h1>Meet the PDP Team</h1>
				</div>
				<div class="side">
					<div class="line"></div>
					01
				</div>
			</div>
            <div class="contain">
                <ul class="grid">
                    <li>
                        <div class="photo">
                            <img src="img/team/gurj.jpg">
                        </div>
                        <h4>Gurj Gill <img src="/img/flags/canada.png"></h4>
                        <p>Chief Executive Officer</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/dave.jpg">
                        </div>
                        <h4>David Hyland <img src="/img/flags/canada.png"></h4>
                        <p>Chief Operating Officer</p>
                    </li>
					<!--  <li>
                        <div class="photo">
                            <img src="img/team/russel.jpg">
                        </div>
                        <h4>Russel McClean <img src="/img/flags/canada.png"></h4>
                        <p>Chief Financial Officer</p>
                    </li>-->
                    <li>
                        <div class="photo">
                            <img src="img/team/jeff.jpg">
                        </div>
                        <h4>Jeff Grison <img src="/img/flags/canada.png"></h4>
                        <p>Chief Technology Officer</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/alan.jpg">
                        </div>
                        <h4>Alan Gonzalez <img src="/img/flags/us.png"></h4>
                        <p>V.P Product Development</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/blake.jpg">
                        </div>
                        <h4>Blake Peterson <img src="/img/flags/us.png"></h4>
                        <p>Director of Training &amp; Development</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/michael.jpg">
                        </div>
                        <h4>Michael Schroeder <img src="/img/flags/canada.png"></h4>
                        <p>Field Operations Manager</p>
                    </li>
					<!-- <li>
	                        <div class="photo">
	                            <img src="img/team/steve.jpg">
	                        </div>
	                        <h4>Steve Riddle <img src="/img/flags/us.png"></h4>
	                        <p>Regional Manager - US Central</p>
                    	</li> -->
                    <li>
                        <div class="photo">
                            <img src="img/team/gabriel.jpg">
                        </div>
                        <h4>Gabriel Dadoun <img src="/img/flags/canada.png"></h4>
                        <p>Regional Manager - Quebec / Maritimes</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/jackie.jpg">
                        </div>
                        <h4>Jacqueline Henderson <img src="/img/flags/canada.png"></h4>
                        <p>Regional Manager - Ontario</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/anissa.jpg">
                        </div>
                        <h4>Anissa Gonzalez <img src="/img/flags/us.png"></h4>
                        <p>Client Support</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/matt.jpg">
                        </div>
                        <h4>Matt Vico <img src="/img/flags/us.png"></h4>
                        <p>Client Support</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/lara.jpg">
                        </div>
                        <h4>Lara Reyes <img src="/img/flags/canada.png"></h4>
                        <p>Creative Director</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/joey.jpg">
                        </div>
                        <h4>Joey Barrett <img src="/img/flags/us.png"></h4>
                        <p>Director Of Software Engineering</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/chris.jpg">
                        </div>
                        <h4>Chris Tully <img src="/img/flags/canada.png"></h4>
                        <p>Web Developer</p>
                    </li>
                    <li>
                        <div class="photo">
                            <img src="img/team/james.jpg">
                        </div>
                        <h4>James Jennings <img src="/img/flags/canada.png"></h4>
                        <p>Web Developer</p>
                    </li>
                </ul>
            </div>
        </section>
<?php get_template_part( 'template-parts/core', 'modal' ); ?>
<?php get_footer(); ?>
