# I — Interface Segregation Principle

> "No client should be forced to depend on methods it does not use."

## Definition
Large interfaces should be **split into smaller, specific ones**.  
A class should only implement what it actually needs.

## Key Idea
- Prefer many small interfaces over one large interface
- Keep interfaces focused and minimal

## Violation Sign
A class that implements an interface but leaves some methods **empty or throws "not implemented"**.