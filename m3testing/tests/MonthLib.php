<?php

// Php units test self-contained blocks of code that you have written. Mocking is a more advanced testing
// technique where you can 'mock' things such as functions from external libraries in order to test them

require_once '../monthlib.php';

use PHPUnit\Framework\TestCase;

class MonthLib extends TestCase  // 'extends TestCase' means class MonthLib inherits from TestCase
{
    // Every method in a test file must have the prefix 'test', see below:
    // Test category: SUCCESS
    // Expect test to succeed
    public function testNameOfMonth_Given1ReturnJanuary()
    {
        // ARRANGE - set up
        $expected = 'January';
        $month = 1;

        // ACT
        $result = nameOfMonth($month);

        // ASSERT - compare the expected result to the actual result
        $this->assertEquals($expected, $result);  // assertEquals is not a function we have
    }                                             // written but inherited from TestCase


    public function testNameOfMonth_Given12ReturnDecember()
    {
        // ARRANGE - set up
        $expected = 'December';
        $month = 12;

        // ACT
        $result = nameOfMonth($month);

        // ASSERT - compare the expected result to the actual result
        $this->assertEquals($expected, $result);  // assertEquals is not a function we have
    }                                             // written but inherited from TestCase

         // Test Category: FAILURE
         // expecting test to fail
//public function testNameOfMonth_Given0ReturnError() // NOT WORKING
//    {
//        // ARRANGE - set up
//        $month = 0;
//        $this->expectException(TypeError::class); // $expected not necessary as expecting an error
//
//         // ACT
//         $result = nameOfMonth($month);
//
//        // ASSERT - compare the expected result to the actual result
////         $this->assertEquals($expected, $result);  // Not needed because error
//    }

         // Test Category: MALFORMED
         // (give $expected as something that cannot be juggled into what it's expecting)
public function testNameOfMonth_Given1ReturnJanuary()
     {
         // ARRANGE - set up
        $expected = 'Barry';
        $month = 1;
        $this->expectException(TypeError::class);

         // ACT
         $result = nameOfMonth($month);
     }
}