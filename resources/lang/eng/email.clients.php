<?php

// Client/contract related keys extracted from resources/lang/eng/email.php.
// Merge into the host application's file; do not overwrite it.

return array (
  'newUser' => 
  array (
    'clientSignupMessage' => 'Congratulations! Your account has been approved successfully.',
  ),
  'newClientTask' => 
  array (
    'subject' => 'New Task Generated',
    'content' => 'A New Task has been Created in Project',
  ),
  'payment' => 
  array (
    'clientsubject' => 'Payment Success',
    'clientName' => 'Client Name',
    'clientEmail' => 'Client Email',
  ),
  'contractSign' => 
  array (
    'subject' => 'Contract Signed',
    'text' => ':contract (contract) is signed by :client.',
  ),
  'newContract' => 
  array (
    'subject' => 'New Contract Created!',
    'text' => 'A new contract has been created.',
  ),
);
