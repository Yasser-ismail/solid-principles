# D — Dependency Inversion Principle

> "Depend on abstractions, not on concretions."

## Definition
High-level modules should not depend on low-level modules.  
Both should depend on **abstractions (interfaces or abstract classes)**.

## Key Idea
- Code to an interface, not an implementation
- Inject dependencies rather than hardcoding them

## Violation Sign
A high-level class that **directly instantiates** a low-level class using `new`.