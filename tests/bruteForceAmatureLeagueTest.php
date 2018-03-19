<?php
    declare(strict_types=1);

    use app\bruteForceAmatureLeague;
    use PHPUnit\Framework\TestCase;

    final class bruteForceAmatureLeagueTest extends TestCase
    {
        public function testForDefaultElementsinLevel1(): void
        {
            $object = new bruteForceAmatureLeague('abc1');
            $allResults = $object->getResult();
            $this->assertContains("ab", $allResults[0], "ab - found / lambada?");
            $this->assertContains("c", $allResults[0], "c - found / tango!");
        }

        public function testForDefaultElementsinLevel2(): void
        {
            $object = new bruteForceAmatureLeague('abc1');
            $allResults = $object->getResult();

            $this->assertContains("bc", $allResults[1], "bc - found / salsa?");
            $this->assertContains("a", $allResults[1], "a - found / cha cha cha!");
        }

        public function testForDefaultElementsinLevel3(): void
        {
            $object = new bruteForceAmatureLeague('abc1');
            $allResults = $object->getResult();
            $this->assertContains("a", $allResults[2], "a - found / no jocke here!");
            $this->assertContains("b", $allResults[2], "b - found / insert jocke here!");
            $this->assertContains("c", $allResults[2], "c - found / apply jockes here!");
        }

        public function testForDefaultElementsinLevel4(): void
        {
            $object = new bruteForceAmatureLeague('abc1');
            $allResults = $object->getResult();

            $this->assertEquals(["abc"], $allResults[3], "Now its time to dance some real LAMBADA!");

        }

        public function testForToManyCoolTests(): void
        {
            $this->assertEquals(false, true, "It was always ment to fail!");

        }

    }