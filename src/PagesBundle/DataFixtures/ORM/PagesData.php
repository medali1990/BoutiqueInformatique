<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 05/11/2016
 * Time: 12:26
 */

namespace PagesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PagesBundle\Entity\Pages ;


class PagesData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager){

        $page = new Pages();
        $page->setTitre("MENTIONS LEGALES");
        $page->setContenu("
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin. Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
			</p>
			<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
			</p>
			<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
			</p>");

        $manager->persist($page);


        $page1 = new Pages();
        $page1->setTitre("FAQ");
        $page1->setContenu("
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin. Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
			</p>
			<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
			</p>
			<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
			</p>");

        $manager->persist($page1);

        $page2 = new Pages();
        $page2->setTitre("INFORMATION");
        $page2->setContenu("
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin. Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
			</p>
			<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
			</p>
			<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
		</p>
		<h5>Lorem ipsum dolor sit amet</h5><br>
		<p>
		Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
			</p>");

        $manager->persist($page2);
        $manager->flush();
    }

    public function getOrder()
    {
        // TODO: Implement getOrder() method.

        return 5;
    }

}