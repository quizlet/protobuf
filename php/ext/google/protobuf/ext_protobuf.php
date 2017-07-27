<?hh

// Protocol Buffers - Google's data interchange format
// Copyright 2008 Google Inc.  All rights reserved.
// https://developers.google.com/protocol-buffers/
//
// Redistribution and use in source and binary forms, with or without
// modification, are permitted provided that the following conditions are
// met:
//
//     * Redistributions of source code must retain the above copyright
// notice, this list of conditions and the following disclaimer.
//     * Redistributions in binary form must reproduce the above
// copyright notice, this list of conditions and the following disclaimer
// in the documentation and/or other materials provided with the
// distribution.
//     * Neither the name of Google Inc. nor the names of its
// contributors may be used to endorse or promote products derived from
// this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
// "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
// LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
// A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
// OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
// LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
// DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
// THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
// (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
// OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

namespace Google\Protobuf\Internal {
	<<__NativeData("ZendCompat")>>
	class RepeatedField implements \ArrayAccess, \IteratorAggregate, \Countable {
		<<__Native("ZendCompat")>> public function __construct(int $type, string $klass = null);
		<<__Native("ZendCompat")>> public function append(mixed $value): void;
		<<__Native("ZendCompat")>> public function offsetExists(int $offset): bool;
	    <<__Native("ZendCompat")>> public function offsetGet(int $offset): mixed;
	    <<__Native("ZendCompat")>> public function offsetSet(int $offset, mixed $value): void;
	    <<__Native("ZendCompat")>> public function offsetUnset(int $offset): void;
	    <<__Native("ZendCompat")>> public function count(): int;
	    <<__Native("ZendCompat")>> public function getIterator(): RepeatedFieldIter;
	}

	<<__NativeData("ZendCompat")>>
	class RepeatedFieldIter implements \Iterator {
	    <<__Native("ZendCompat")>> public function __construct(mixed $container);
		<<__Native("ZendCompat")>> public function rewind(): void;
	    <<__Native("ZendCompat")>> public function current(): mixed;
	    <<__Native("ZendCompat")>> public function key(): int;
	    <<__Native("ZendCompat")>> public function next(): void;
	    <<__Native("ZendCompat")>> public function valid(): bool;
	}

	<<__NativeData("ZendCompat")>>
	class GPBType {
	    <<__Native("ZendCompat")>> const DOUBLE   =  1;
	    <<__Native("ZendCompat")>> const FLOAT    =  2;
	    <<__Native("ZendCompat")>> const INT64    =  3;
	    <<__Native("ZendCompat")>> const UINT64   =  4;
	    <<__Native("ZendCompat")>> const INT32    =  5;
	    <<__Native("ZendCompat")>> const FIXED64  =  6;
	    <<__Native("ZendCompat")>> const FIXED32  =  7;
	    <<__Native("ZendCompat")>> const BOOL     =  8;
	    <<__Native("ZendCompat")>> const STRING   =  9;
	    <<__Native("ZendCompat")>> const GROUP    = 10;
	    <<__Native("ZendCompat")>> const MESSAGE  = 11;
	    <<__Native("ZendCompat")>> const BYTES    = 12;
	    <<__Native("ZendCompat")>> const UINT32   = 13;
	    <<__Native("ZendCompat")>> const ENUM     = 14;
	    <<__Native("ZendCompat")>> const SFIXED32 = 15;
	    <<__Native("ZendCompat")>> const SFIXED64 = 16;
	    <<__Native("ZendCompat")>> const SINT32   = 17;
	    <<__Native("ZendCompat")>> const SINT64   = 18;
	}

	<<__NativeData("ZendCompat")>>
	class Descriptor { }

	<<__NativeData("ZendCompat")>>
	class EnumDescriptor { }

	<<__NativeData("ZendCompat")>>
	class FieldDescriptor { }

	<<__NativeData("ZendCompat")>>
	class DescriptorPool {
		<<__Native("ZendCompat")>> public static function getGeneratedPool(): self;
		<<__Native("ZendCompat")>> public function internalAddGeneratedFile(string $data): void;
	}

	<<__NativeData("ZendCompat")>>
	class Message {
		<<__Native("ZendCompat")>> public function clear(): void;
		<<__Native("ZendCompat")>> public function serializeToString(): string;
		<<__Native("ZendCompat")>> public function mergeFromString(string $data): void;
		<<__Native("ZendCompat")>> public function serializeToJsonString(): string;
		<<__Native("ZendCompat")>> public function mergeFromJsonString(string $data): void;
		<<__Native("ZendCompat")>> public function mergeFrom(mixed $message): void;
		<<__Native("ZendCompat")>> protected function readOneof(int $number): mixed;
		<<__Native("ZendCompat")>> protected function writeOneof(int $number, mixed $value): void;
		<<__Native("ZendCompat")>> protected function whichOneof(string $oneof_name): string;
		<<__Native("ZendCompat")>> public function __construct(?string $data = null);
	}

	<<__NativeData("ZendCompat")>>
	class MapField implements \ArrayAccess, \IteratorAggregate, \Countable {
		<<__Native("ZendCompat")>> public function __construct(int $key_type, int $value_type, ?stirng $klass = null);
		<<__Native("ZendCompat")>> public function offsetExists(mixed $key): bool;
		<<__Native("ZendCompat")>> public function offsetGet(mixed $key): mixed;
		<<__Native("ZendCompat")>> public function offsetSet(mixed $key, mixed $value): void;
		<<__Native("ZendCompat")>> public function offsetUnset(mixed $key): void;
		<<__Native("ZendCompat")>> public function count(): int;
		<<__Native("ZendCompat")>> public function getIterator(): MapFieldIter;
	}

	<<__NativeData("ZendCompat")>>
	class MapFieldIter implements \Iterator {
		<<__Native("ZendCompat")>> public function __construct(MapField $container, GPBType $key_type);
		<<__Native("ZendCompat")>> public function rewind(): void;
		<<__Native("ZendCompat")>> public function current(): object;
		<<__Native("ZendCompat")>> public function key(): object;
		<<__Native("ZendCompat")>> public function next(): void;
		<<__Native("ZendCompat")>> public function valid(): bool;
	}

	<<__NativeData("ZendCompat")>>
	class GPBUtil {
		<<__Native("ZendCompat")>> public static function checkInt32(mixed &$var): void;
		<<__Native("ZendCompat")>> public static function checkUint32(mixed &$var): void;
		<<__Native("ZendCompat")>> public static function checkInt64(mixed &$var): void;
		<<__Native("ZendCompat")>> public static function checkUint64(mixed &$var): void;
		<<__Native("ZendCompat")>> public static function checkEnum(mixed &$var): void; 
		<<__Native("ZendCompat")>> public static function checkFloat(mixed &$var): void;
		<<__Native("ZendCompat")>> public static function checkDouble(mixed &$var): void;
		<<__Native("ZendCompat")>> public static function checkBool(mixed &$var): void; 
		<<__Native("ZendCompat")>> public static function checkString(mixed &$var): void;
		<<__Native("ZendCompat")>> public static function checkBytes(mixed &$var): void;
		<<__Native("ZendCompat")>> public static function checkMessage(mixed &$var, mixed $klass): void;
		<<__Native("ZendCompat")>> public static function checkMapField(mixed &$var, mixed $key_type, mixed $value_type, mixed $klass = null): void;
		<<__Native("ZendCompat")>> public static function checkRepeatedField(mixed &$var, int $type, mixed $klass = null): void;
	}
}