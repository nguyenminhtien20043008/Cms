<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Constraints; if (!defined('ABSPATH')) exit; class GroupSequence { public $groups; public $cascadedGroup; public function __construct(array $groups) { $this->groups = $groups['value'] ?? $groups; } } 