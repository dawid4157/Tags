<?php
	/**
	 * The class that contains methods that allow you to specify HTML tag attributes as a function argument.     * Return the tag prepare.
	 * @author dawid4157
	 * @version  1.0
	 * @copyright GNU GENERAL PUBLIC LICENSE Version 3, 29 June 2007
	 */
	trait CommonMethodsForTags {
		/**
		 * Used in setLink() method
		 * @var str $link
		 */
		private $message;
		/**
		 * Used in content link
		 * @var str $content
		 */
		protected $link;
		/**
		 * Set link in href="" and src="" attribute
		 * @param $link
		 */
		protected $content;
		/**
		 * Used in inline css style
		 * @var str $style
		 */
		private $style;

		/**
		 * Set inline style CSS
		 * @param str $style
		 */
		public function setStyle($style) {
			return $this->style = $style;
		}
		/**
		 * Used in CSS class
		 */
		private $class;
		/**
		 * Set class in CSS
		 * @param str $class
		 */
		public function setClass($class) {
			return $this->class = $class;
		}
		/**
		 * Used in ID
		 */
		private $id;
		/**
		 * Set ID
		 * @param str $id
		 */
		public function setId($id) {
			return $this->id = $id;
		}
		/**
		 * Set link
		 * @param str $link
		 */
		public function setLink($link) { 
			return $this->link = $link;
		}
		/**
		 * Return content link
		 * @return $this->link;
		 */
		public function getLink() {
			return $this->link;
		}
		/**
		 * Returns the content of the tag
		 * @return $this->message
		 */
		public function getMessage() {
			return $this->message;
		}
	}
	class Tags {
		// Usage `Common` trait
		use CommonMethodsForTags;
		/**
		 * Target attribute array
		 * @var array $target
		 */
		protected $targets = array('_self', '_blank', '_parent', '_top');
		/**
		 * Description of the image displayed if it does not load.
		 * @var $desc
		 */

		protected $desc;

		/**
		 * Name of `rel` attribute in <link>
		 * @var str $rel
		 */
		private $rel;
		
		/**
		 * Title page
		 * @vat str $title
		 */
		private $title;
		
		/**
		 * Set visible part of the link
		 * @param str $content
		 */
		public function setContent($content) {
			return $this->content = $content;
		}
		/**
		 * Get text link content
		 * @return $this
		 */
		public function getContent() {
			return $this->content;
		}

		/**
		 * Set number of target from $target array()
		 * @param array $target
		 */
	    public function setTarget($target) {
	        // set the current target, do not override $this->targets
	        return $this->target = $target;
	    }
		/**
		 * Set description image: alt="" attribute
		 * @param $desc
		 */
		public function setDesc($desc) { 
			return $this->desc = $desc;
		}
		/**
		 * Return description image: alt="" attribute
		 * @return $this->desc
		 */
		public function getDesc() {
			return $this->desc;
		}
		/**
		 * Set `rel` attribute in <link>
		 * @param str $rel
		 */
		public function setRel($rel) {
			return $this->rel = $rel;
		}
		/**
		 * Get `rel` attribute from <link>
		 * @return $this
		 */
		public function getRel() {
			return $this->rel;
		}
		/**
		 * Set title in the browser bar
		 * @param str $title
		 */
		public function setTitle($title) {
			return $this->title = $title;
		}

		/**
		 * Get title from the browset bar
		 * @return $this
		 */
		public function getTitle() {
			return $this->title;
		}
		/**
		 * Url method
		 * @param  str $link - Your link
		 * @param  str $content - Visible link text.
		 * @param  array $target - Target of attribute target="" from HTML
		 * @param  str $style - Your style of attribute: style="" from HTML(optional parametr[Boolean, if not given, str if given])
		 * @param  str $class - Your class of attribute: class="" from HTML(optional parametr[Boolean, if not given, str if given])
		 * @param  str $id - Your id od attribute: id="" from HTML(optional parametr[Boolean, if not given, str if given])
		 * @return $this
		 */
		public function url($link, $content, $target = [0], $style = false, $class = false, $id = false) {
	        switch($target) {
	            case '1':
	                $this->message = '<a style="'.$this->setStyle($style).'" class="'.$this->setClass($class).'" id="'.$this->setId($id).'" href="'.$this->setLink($link).'" target="'.$this->setTarget($this->targets[1]).'">'.$this->setContent($content).'</a>';
	            break;
	            case '2':
	                $this->message = '<a style="'.$this->setStyle($style).'" class="'.$this->setClass($class).'" id="'.$this->setId($id).'" href="'.$this->setLink($link).'" target="'.$this->setTarget($this->targets[2]).'">'.$this->setContent($content).'</a>';
	            break;
	            case '3':
	                $this->message = '<a style="'.$this->setStyle($style).'" class="'.$this->setClass($class).'" id="'.$this->setId($id).'" href="'.$this->setLink($link).'" target="'.$this->setTarget($this->targets[3]).'">'.$this->setContent($content).'</a>';
	            break;
	            default:
	                $this->message = '<a style="'.$this->setStyle($style).'" class="'.$this->setClass($class).'" id="'.$this->setId($id).'" href="'.$this->setLink($link).'" target="'.$this->setTarget($this->targets[0]).'">'.$this->setContent($content).'</a>';
	            break;
	        } 
	        return $this->message;
	    }
	    
		/**
		 * Image method
		 * @param  str $link - Your link to image
		 * @param  boolean/str $desc - Your alternative text image(optional parametr[Boolean, if not given, str if given])
		 * @param  str $style - Your style of attribute: style="" from HTML(optional parametr[Boolean, if not given, str if given])
		 * @param  str $class - Your class of attribute: class="" from HTML(optional parametr[Boolean, if not given, str if given])
		 * @param  str $id - Your id od attribute: id="" from HTML(optional parametr[Boolean, if not given, str if given])
		 * @return $this - return message, link, desc
		 */
		public function image($link, $desc = false, $style = false, $class = false, $id = false) {
			$this->message = '<img style="'.$this->setStyle($style).'" class="'.$this->setClass($class).'" id="'.$this->setId($id).'" src="'.$this->setLink($link).'" alt="'.$this->setDesc($desc).'"/>';
			return $this->message; $this->link; $this->desc;
		}

		# # # # # # # # # # # # # # # # Dynamically attaching head section tags # # # # # # # # # # # # # # # #

		/**
		 * <link> tag in HTML
		 * @param str $rel
		 * @param str $link
		 * @return $this
		 */
		public function link($rel, $link) {
			$this->message = '<link rel="'.$this->setRel($rel).'" href="'.$this->setLink($link).'">';
			return $this->message;
		}

		/**
		 * <title> tag in HTML
		 * @param $title
		 * @return $this
		 */
		public function title($title) {
			$this->message = '<title>'.$this->setTitle($title).'</title>';
			return $this->message;
		}
	}
	$tags = new Tags;