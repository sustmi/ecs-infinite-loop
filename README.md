This is a sample repository that presents infinite loop issue in [EasyCodingStandard](https://github.com/easy-coding-standard/easy-coding-standard) fixing.

## How to use:
```
composer install
composer check
```

The ecs should check the source file and finish. However, as there are two rules
that cancel changes of each other, the process never finishes.

The `fix` branch of this repository depends on ECS version with proposed fix.
