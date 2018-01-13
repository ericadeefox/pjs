<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Mailer\Email;
use Cake\Validation\Validator;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['Home']);
    }

    public function home()
    {
        $bg = ['bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg'];
        $tagline = [
            'good, honest repairs for good, honest folks',
            'we screw sockets, not our customers',
            'because your mechanic should make you happy'
        ];
        $i = rand(0, count($bg)-1);
        $selectedBg = "$bg[$i]";
        $selectedTag = "$tagline[$i]";
        $this->set(compact('selectedBg', 'selectedTag'));

        $validator = new Validator();
        $validator
            ->requirePresence('name')
            ->notEmpty('name', 'Please tell us who you are.')
            ->requirePresence('email')
            ->notEmpty('email', 'Please provide a valid email address. Otherwise, we can\'t respond back.')
            ->requirePresence('body')
            ->notEmpty('body', 'Don\'t forget to write a message.');
        if ($this->request->is('post')) {
            $this->set($this->request->getData());

            $errors = $validator->errors($this->request->getData());
            if (empty($errors)) {
                $email = new Email('contact_form');
                $email->setFrom([$this->request->getData('email') => $this->request->getData('name')])
                    ->setTo('pjshonestauto@gmail.com')
                    ->setSubject('PJS Honest Auto contact form: ' . $this->request->getData('subject'));
                if ($email->send($this->request->getData('body'))) {
                    $this->Flash->success('Thanks for contacting us. We will try to respond to your message soon.');

                    return null;
                } else {
                    $this->Flash->error('There was some problem sending your email.
                         It could be a random glitch, or something could be permanently
                         broken. Please contact <a href="mailto:pjshonestauto@gmail.com">pjshonestauto@gmail.com</a> for assistance.');

                    return null;
                }
            }
        }

        return null;
    }
}
