
# TDD-PHPUnit

This repository contains a PHP project set up to practice Test-Driven Development (TDD) using PHPUnit. The goal is to build and test code following TDD principles, ensuring code quality and reliability through structured unit testing.

## Project Structure

The project has the following structure:

```plaintext
TDD-PHPUnit/
├── src/                # Contains the source code files
├── tests/              # Contains test files written with PHPUnit
├── composer.json       # Composer configuration for managing dependencies
├── composer.lock       # Lock file for dependencies
└── phpunit.xml         # PHPUnit configuration file
```

## Getting Started

### Prerequisites

Ensure you have the following installed on your system:

- **PHP** (>= 7.4 or your preferred version)
- **Composer** (Dependency manager for PHP)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/Youssef11khaled99/TDD-PHPUnit.git
   ```

2. Navigate to the project directory:

   ```bash
   cd TDD-PHPUnit
   ```

3. Install dependencies using Composer:

   ```bash
   composer install
   ```

### Running Tests

Run the following command to execute all tests using PHPUnit:

```bash
vendor/bin/phpunit
```

The test results will be displayed in the terminal, showing which tests passed, failed, or are incomplete.

### Writing Tests

Follow the TDD cycle when writing tests:

1. **Write a failing test:** Write a unit test for the new functionality or feature.
2. **Make the test pass:** Implement the minimum code needed to pass the test.
3. **Refactor:** Clean up the code while ensuring that the test continues to pass.

Each test file should be placed in the `tests` directory and follow the naming convention `*Test.php`.

### Configuration

The PHPUnit configuration is located in `phpunit.xml`. Modify it as needed for custom settings, such as changing the test suite name, adjusting output verbosity, or enabling code coverage.
