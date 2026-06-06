# S — Single Responsibility Principle

> "A class should have only one reason to change."

## Definition
Every class, module, or function should be responsible for **one thing only**.  
If a class handles multiple concerns, changes to one concern may break the other.

## Key Idea
- One class → One job
- Separate concerns into different classes

## Violation Sign
A class that handles **business logic + database + UI** all at once.
