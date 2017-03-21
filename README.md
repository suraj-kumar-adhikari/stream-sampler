# Project Description

Random data sampler for a stream. It samples random data out of stream.

# How to run

PHP version must be >= 7.0.0

Pass data through pipes. For checking with file please create a file and put random data into it.

```bash
$ cat test.txt | ./stream-sampler 5
$ dd if=/dev/urandom count=100 bs=1MB | base64 | ./stream-sampler 5
```

Generate random data from language

```bash
$ ./stream-sampler 5 --generate-random
```

# Run Tests
```bash
$ phpunit
```