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

<<__NativeData("Google\\Protobuf\\Internal\\RepeatedField")>>
class RepeatedField implements \ArrayAccess, \IteratorAggregate, \Countable {
	<<__Native>>
	public function __construct(int $type, string $klass = null);

	<<__Native>>
	public function append(mixed $value): void;

	<<__Native>>
	public function offsetExists(int $offset): bool;

	<<__Native>>
	public function offsetGet(int $offset): mixed;

	<<__Native>>
	public function offsetSet(int $offset, mixed $value): void;

	<<__Native>>
	public function offsetUnset(int $offset): void;

	<<__Native>>
	public function count(): int;

	<<__Native>>
	public function getIterator(): RepeatedFieldIter;
}


<<__NativeData("Google\\Protobuf\\Internal\\RepeatedFieldIter")>>
class RepeatedFieldIter implements \Iterator {
	<<__Native>>
	public function __construct(mixed $container);

	<<__Native>>
	public function rewind(): void;

	<<__Native>>
	public function current(): mixed;

	<<__Native>>
	public function key(): int;

	<<__Native>>
	public function next(): void;

	<<__Native>>
	public function valid(): bool;
}


<<__NativeData("Google\\Protobuf\\Internal\\GPBType")>>
class GPBType {
	const DOUBLE   =  1;
	const FLOAT    =  2;
	const INT64    =  3;
	const UINT64   =  4;
	const INT32    =  5;
	const FIXED64  =  6;
	const FIXED32  =  7;
	const BOOL     =  8;
	const STRING   =  9;
	const GROUP    = 10;
	const MESSAGE  = 11;
	const BYTES    = 12;
	const UINT32   = 13;
	const ENUM     = 14;
	const SFIXED32 = 15;
	const SFIXED64 = 16;
	const SINT32   = 17;
	const SINT64   = 18;
}

<<__NativeData("Google\\Protobuf\\Internal\\Descriptor")>>
class Descriptor { }

<<__NativeData("Google\\Protobuf\\Internal\\EnumDescriptor")>>
class EnumDescriptor { }

<<__NativeData("Google\\Protobuf\\Internal\\FieldDescriptor")>>
class FieldDescriptor { }

<<__NativeData("Google\\Protobuf\\Internal\\DescriptorPool")>>
class DescriptorPool {
	<<__Native>>
	public static function getGeneratedPool(): self;

	<<__Native>>
	public function internalAddGeneratedFile(string $data): void;
}


<<__NativeData("Google\\Protobuf\\Internal\\Message")>>
class Message {
	<<__Native>>
	public function clear(): void;

	<<__Native>>
	public function serializeToString(): string;

	<<__Native>>
	public function mergeFromString(string $data): void;

	<<__Native>>
	public function serializeToJsonString(): string;

	<<__Native>>
	public function mergeFromJsonString(string $data): void;

	<<__Native>>
	public function mergeFrom(mixed $message): void;

	<<__Native>>
	protected function readOneof(int $number): mixed;

	<<__Native>>
	protected function writeOneof(int $number, mixed $value): void;

	<<__Native>>
	protected function whichOneof(string $oneof_name): string;

	<<__Native>>
	public function __construct(?string $data = null);
}


<<__NativeData("Google\\Protobuf\\Internal\\MapField")>>
class MapField implements \ArrayAccess, \IteratorAggregate, \Countable {
	<<__Native>>
	public function __construct(int $key_type, int $value_type, ?stirng $klass = null);

	<<__Native>>
	public function offsetExists(mixed $key): bool;

	<<__Native>>
	public function offsetGet(mixed $key): mixed;

	<<__Native>>
	public function offsetSet(mixed $key, mixed $value): void;

	<<__Native>>
	public function offsetUnset(mixed $key): void;

	<<__Native>>
	public function count(): int;

	<<__Native>>
	public function getIterator(): MapFieldIter;
}


<<__NativeData("Google\\Protobuf\\Internal\\MapFieldIter")>>
class MapFieldIter implements \Iterator {
	<<__Native>>
	public function __construct(MapField $container, GPBType $key_type);

	<<__Native>>
	public function rewind(): void;

	<<__Native>>
	public function current(): object;

	<<__Native>>
	public function key(): object;

	<<__Native>>
	public function next(): void;

	<<__Native>>
	public function valid(): bool;
}


<<__NativeData("Google\\Protobuf\\Internal\\GPBUtil")>>
class GPBUtil {
	<<__Native>>
	public static function checkInt32(mixed &$var): void;

	<<__Native>>
	public static function checkUint32(mixed &$var): void;

	<<__Native>>
	public static function checkInt64(mixed &$var): void;

	<<__Native>>
	public static function checkUint64(mixed &$var): void;

	<<__Native>>
	public static function checkEnum(mixed &$var): void;

	<<__Native>>
	public static function checkFloat(mixed &$var): void;

	<<__Native>>
	public static function checkDouble(mixed &$var): void;

	<<__Native>>
	public static function checkBool(mixed &$var): void;

	<<__Native>>
	public static function checkString(mixed &$var): void;

	<<__Native>>
	public static function checkBytes(mixed &$var): void;

	<<__Native>>
	public static function checkMessage(mixed &$var, mixed $klass): void;

	<<__Native>>
	public static function checkMapField(mixed &$var, mixed $key_type, mixed $value_type, mixed $klass = null): void;

	<<__Native>>
	public static function checkRepeatedField(mixed &$var, int $type, mixed $klass = null): void;
}

}