<?php

/*
 * This file is part of the Vatsimphp package
 *
 * Copyright 2013 - Jelle Vink <jelle.vink@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace Vatsimphp;

class AbstractSyncTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * Test default settings
     * @covers Vatsimphp\Sync\AbstractSync::__construct
     */
    public function testDefaults()
    {
        $class = $this->getMockBuilder('Vatsimphp\Sync\AbstractSync')
            ->getMockForAbstractClass();

        // protected log
        $propLog = new \ReflectionProperty($class, 'log');
        $propLog->setAccessible(true);
        $this->assertInstanceOf('Psr\Log\LoggerInterface', $propLog->getValue($class));

    }
}
