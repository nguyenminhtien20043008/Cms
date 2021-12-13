<?php
 namespace MailPoetVendor\Egulias\EmailValidator\Validation; if (!defined('ABSPATH')) exit; use MailPoetVendor\Egulias\EmailValidator\EmailLexer; use MailPoetVendor\Egulias\EmailValidator\EmailParser; use MailPoetVendor\Egulias\EmailValidator\Exception\InvalidEmail; class RFCValidation implements EmailValidation { private $parser; private $warnings = []; private $error; public function isValid($email, EmailLexer $emailLexer) { $this->parser = new EmailParser($emailLexer); try { $this->parser->parse((string) $email); } catch (InvalidEmail $invalid) { $this->error = $invalid; return \false; } $this->warnings = $this->parser->getWarnings(); return \true; } public function getError() { return $this->error; } public function getWarnings() { return $this->warnings; } } 