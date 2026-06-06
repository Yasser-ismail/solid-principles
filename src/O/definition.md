# O — Open/Closed Principle

> "Software entities should be open for extension, but closed for modification."

## Definition
You should be able to **add new behavior** without changing existing, tested code.  
Achieve this through abstraction, interfaces, or inheritance.

## Key Idea
- Extend behavior by adding new code
- Never touch working code to add a feature

## Violation Sign
Adding a new feature requires **modifying an existing class** with if/else or switch statements.
